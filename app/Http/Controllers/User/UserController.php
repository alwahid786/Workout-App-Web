<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\ResponseTrait;
use App\Models\BookedSession;
use App\Models\Chat;
use App\Models\Classes;
use App\Models\ContactUs;
use App\Models\Customer;
use App\Models\Review;
use App\Models\Transactions;
use App\Models\Session as ModelsSession;
use App\Http\Traits\NotificationTrait;
use App\Models\Message;
use Carbon\Carbon;
use DateTime;
use Stripe;
use Throwable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Stripe\SearchResult;
use Stevebauman\Location\Facades\Location;



class UserController extends Controller
{
    use NotificationTrait;
    use ResponseTrait;
    ///////// category Trainer Api...../////////
    public function getTrainerCategory(Request $request)
    {
        $sessions = ModelsSession::latest()->limit(6)->with('trainerData', 'category')->get();
        $sessions = json_decode($sessions, true);

        return view('pages.website.all-trainers-web', compact('sessions'));
    }
    /////.........spacific.........//////
    public function getSpecificTrainer(Request $request, $id)
    {
        if ($id) {
            $trainer_category = Category::where('id', $id)->with('trainerCategory.trainer')->first();
        } else {
            $trainer_category = Category::with('trainerCategory.trainer')->get();
        }

        if (!$trainer_category) {
            return $this->sendError('Category');
        }
        $responseBody = $trainer_category;
        $userdata     = json_decode($responseBody, true);

        return view('pages.website.specific-trainers-web', compact('userdata'));
    }

    ///....update profile.....////
    public function updateProfile(Request $request)
    {
        if ($request->has('files')) {
            try {
                $file = $request->file('files');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path('/files'), $name);
                $fileNames = $name;
            } catch (Exception $e) {
                $message = $e->getMessage();
                return $this->failure($message);
            }
            $image = url('public/files') . '/' . $fileNames;
            // return $this->sendResponse($image, 'URL');
        }
        $data = request()->except(['_token']);
        if ($request->has('files')) {
            unset($data['files']);
            $data['profile_img'] = $image;
        }
        $update     = User::findOrFail($request->user_id);
        $updateUser = $update->fill($data)->save();
        if (!$updateUser) {
            Session::flash('error', 'Something went wrong, please try again later.');
            return redirect()->back();
        }
        // flash()->success('Profile Updated Successfuly!');
        // return view('pages.website.update-profile');
        return redirect()->route('dashboard');
    }

    ///   stripe payment .....///////
    public function paymentIntent(Request $request)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $month = date('m', strtotime($request->valid_through));
        $year  = date('Y', strtotime($request->valid_through));


        $response = \Stripe\Token::create(
            array(
                "card" => array(
                    "number"    => $request->input('card_number'),
                    "exp_month" => $month,
                    "exp_year"  => $year,
                    "cvc"       => $request->input('cvc'),
                    "name"      => $request->input('name')
                )
            )
        );

        $card_token = $response->id;
        $userId     = auth()->user()->id;


        $customer = $stripe->customers->create([
            'description' => 'Customer create successfully',
            'source'      => $card_token
        ]);

        $ephemeralKey = \Stripe\EphemeralKey::create(
            ['customer' => $customer->id],
            ['stripe_version' => '2020-08-27']
        );



        Customer::create([
            "card_name"   => $request->input('name'),
            "card_number" => $request->input('card_number'),
            'customer_id' => $customer->id,
            'user_id'     => $userId,
            'type'        => 'CREDIT CARD',
            'valid_thru'  => $month . '/' . $year
        ]);

        $pay_int_res = [
            'result'             => 'Success',
            'message'            => 'Customer create successfully',
            'stripe_publish_key' => env('STRIPE_KEY'),
            // 'payment_intent' => $paymentIntent->client_secret,
            'ephemeral_key'      => $ephemeralKey->secret,
            'customer_id'        => $customer->id
        ];


        // return $this->sendResponse($pay_int_res, 'Payment Intent');
        return view('pages.website.payment');
    }
    /////......contact........////
    public function contactUs(ContactUsRequest $request)
    {
        $contact_us = new ContactUs();
        $contact_us->name        = $request->full_name;
        $contact_us->email       = $request->email;
        $contact_us->phone       = $request->phone_number;
        $contact_us->message     = $request->message;
        if (!$contact_us) {
            return $this->sendError('Contact');
        }
        $contact_us->save();
        return redirect()->back();
    }

    /////.....get all trainer........./////
    public function dashbord(Request $request)
    {
        $all_trainer = (new User)->newQuery();
        if ($request->has('search_by') && !empty($request->search_by)) {
            $all_trainer->where('name', 'Like', '%' . $request->search_by . '%')->get();
        }
        $all_trainer = $all_trainer->where('user_type', '=', 'trainer')->with('session.category')->get();
        // Classes::with('session', 'category')->get();
        $class_detail = Classes::with(['category', 'session', 'trainer'])->get();
        $all_category = Category::get();
        if (!$all_trainer) {
            return $this->sendError('Dashboard');
        }

        $averageRatings = Review::select('trainer_id', DB::raw('AVG(rating) as average_rating'))
            ->groupBy('trainer_id')
            ->orderBy('average_rating', 'desc')
            ->limit(5)
            ->with('trainer')
            ->get();

        $topTrainers = json_decode($averageRatings, true);
        $trainers = json_decode($all_trainer, true);
        $class    = json_decode($class_detail, true);
        $category = json_decode($all_category, true);
        return view('pages.userdashboard.explore.dashboard', compact('trainers', 'category', 'class', 'topTrainers'));
    }
    //////////..........search input for traniner.......////////
    public function trainerSearch(Request $request)
    {
        $all_trainer = (new User)->newQuery();
        $all_trainer = User::where('user_type', 'trainer')->where('name', 'Like', '%' . $request->search_by . '%')->get();
        if (!$all_trainer) {
            return $this->sendError('Dashboard');
        }
        $all_trainer = json_decode($all_trainer, true);
        // dd($all_trainer);

        // return $this->sendResponse([], 'Payment successfully Done!');
        return $this->sendResponse([
            'trainers' => $all_trainer,
        ], 'Successfully Search');
    }
    /////....user side trainer detail......../////
    public function trainer_detail(Request $request, $id)
    {
        $trainer = User::where('id', '=', $id)->with(['class.category', 'class.session', 'class.classImage'])->get();
        // if (!$trainer) {
        //     return $this->sendError('Trainer Detail');
        // }
        $trainer_detail      = json_decode($trainer, true);
        $categorizedSessions = ModelsSession::where('trainer_id', $id)->get()->groupBy('category_id');
        // dd($session);
        if (!empty($categorizedSessions)) {
            foreach ($categorizedSessions as $key => $session) {
                $session['category_name'] = Category::where('id', $key)->pluck('title')->first();
                $session['category_id']   = $key;
            }
        }
        $sessions = json_decode($categorizedSessions, true);
        return view('pages.userdashboard.explore.trainer-detail', compact('trainer_detail', 'sessions'));
    }

    ///////////////////.............trainer session................//////////////
    public function trainerSessionDetail(Request $request, $id, $trainerId)
    {
        // dd($id);
        $trainer = User::where('id', '=', $trainerId)->with(['class.category', 'class.session'])->get();
        if (!$trainer) {
            return $this->sendError('Trainer Detail');
        }
        $sessions = ModelsSession::where(['trainer_id' => $trainerId, 'category_id' => $id])->with('class', 'session_image', 'category', 'trainerData')->get();
        $sessions = json_decode($sessions, true);
        $trainer  = json_decode($trainer, true);
        return view('pages.userdashboard.explore.trainer-session-detail', compact('sessions', 'trainer'));
    }

    ///////// .....class detail .............////////
    public function class_detail(Request $request, $id, $day)
    {
        $class         = Classes::where(['trainer_id' => $id])->with('classSession', 'classSession.Category', 'trainer', 'category')->get();
        $classes_count = ModelsSession::where('trainer_id', '=', $id)->count();
        $trainer       = User::where('id', $id)->first();
        if (count($class) > 0) {
            foreach ($class as $session) {
                $session['session'] = ModelsSession::where(['day' => $day, 'trainer_id' => $id])->with('category', 'session_image')->get();
            }
        }
        if (!$class) {
            return $this->sendError('Session Detail');
        }
        $review = Review::where('trainer_id', $id)->with('user', 'session.category')->get();

        $client = BookedSession::where('trainer_id', $id)->groupBy('user_id')->get();

        $client = $client->count();


        $classSession = ModelsSession::where('trainer_id', $id)->groupBy('day')->pluck('day');
        $trainer      = json_decode($trainer, true);
        $class_detail = json_decode($class, true);
        $review       = json_decode($review, true);

        return view('pages.userdashboard.explore.class-detail', compact('class_detail', 'classSession', 'classes_count', 'trainer', 'review', 'client'));
    }
    //////customer card detail........./////////

    public function showCard(Request $request)
    {
        $card           = Customer::where('user_id', auth()->user()->id)->get();
        $session_detail = ModelsSession::where('id', $request->session_id)->first();

        if (!$card) {
            return $this->sendError('Card');
        }
        $card_detail = json_decode($card, true);
        $session     = json_decode($session_detail, true);
        $sessiondate = $request->session_date;

        return view('pages.userdashboard.explore.payment', compact('card_detail', 'session', 'sessiondate'));
    }

    /////// card payment......///////
    public function cardPayment(Request $request)
    {
        $customerId = $request->customer;
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // dd($request->customer);

        try {
            // dd($customerId);
            $payment = \Stripe\Charge::create(
                array(
                    "amount"   => $request->amount * 100,
                    "currency" => "usd",
                    "customer" => $customerId
                )
            );

            // dd($payment);

            if ($payment['status'] = "succeeded") {
                $status = true;
            } else {
                $status = false;
            }
            $booksession = BookedSession::create(
                array(
                    'session_id'   => $request->session_id,
                    'user_id'      => auth()->user()->id,
                    'customer_id'  => $request->customer_id,
                    'is_completed' => $status,
                    'session-date' => $request->session_date,
                    'trainer_id'   => $request->trainer_id,
                )
            );

            $chat = Chat::where(['session_id' => $request->session_id, 'session_date' => $request->session_date])->first();

            if (!empty($chat->users)) {
                $existingUsers = explode(',', $chat->users);
                if (!in_array(auth()->user()->id, $existingUsers)) {

                    $existingUsers[] = auth()->user()->id;

                    $update = $chat->update(['users' => implode(',', $existingUsers)]);
                    // dd($existingUsers);
                }
            } else {


                $create_chat = Chat::create(
                    array(
                        'trainer_id' => $request->trainer_id,
                        'session_id' => $request->session_id,
                        'users' => auth()->user()->id,
                        'status' => 1,
                        'type' => 1,
                        'session_date' => $request->session_date,


                    )
                );
            }

            // Notification 
            if ($booksession) {

                $reciever_id = $request->trainer_id;
                $type_id = $request->session_id;
                $noti_type = 'booked_session';
                $noti_text = 'your session is booked';
                $notification = $this->sendNotification($reciever_id, $type_id, $noti_type, $noti_text);
            }


            // Save data to transactions 
            $transaction = Transactions::create(
                array(
                    'session_id'  => $request->session_id,
                    'user_id'     => auth()->user()->id,
                    'customer_id' => $request->customer_id,
                    'amount'      => $request->amount,
                    'is_refunded' => 0
                )
            );

            if ($transaction) {


                flash()->success('Payment Successfuly!');
                // notify()->success('Laravel Notify is awesome!');
                // Toastr::success('message', 'title', 'welcome to text');
                // Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
                // notify()->success('Welcome to Laravel Notify ⚡️');

                return redirect('/dashboard');
            } else {
                // return $this->sendError('Something went wrong, Try again in a While.');
                Session::flash('error', 'Something went wrong, please try again later.');
                return redirect()->back();
            }
        } catch (Throwable $e) {

            return $this->sendError(false, $e);
        }

        // return $this->sendResponse([], 'Payment successfully Done!');
    }
    //////////.......get all booked session .......///////
    public function getBookedSession()
    {
        $workoutType   = '';
        $whereCategory = [];
        if ($workoutType != '') {
            array_push($whereCategory, ['title', '=', $workoutType]);
        }
        $booksession     = BookedSession::where('user_id', auth()->user()->id)->with([
            'session.class.trainer',
            'session.class.category' => function ($query) use ($whereCategory) {
                if (!empty($whereCategory)) {
                    $query->where($whereCategory);
                }
            },
            'session.session_image'
        ])->get();
        $category        = Category::get();
        $ip              = '162.159.24.227';
        $currentUserInfo = Location::get($ip);
        $categories      = Category::all();
        if (!$booksession) {
            return $this->sendError('Session Detail');
        }
        $booksession_detail = json_decode($booksession, true);
        $category           = json_decode($category, true);


        // echo '<pre>';print_r($booksession_detail);exit;
        return view('pages.userdashboard.dashboard.user-session', compact('booksession_detail', 'category'));
    }
    //////// view booked session.........//////
    public function viewSession($id)
    {
        $session_detail = BookedSession::where('session_id', $id)->with('session.class.trainer', 'session.class.category', 'session.session_image')->first();
        // dd($session_detail);
        $classes        = ModelsSession::where('trainer_id', '=', $session_detail['session']['class']['trainer']['id'])->count();
        $rating         = Review::where('session_id', $session_detail['session']['id'])->with('user:id,name,profile_img')->get();
        $client         = BookedSession::where('trainer_id', $session_detail['session']['class']['trainer']['id'])->groupBy('user_id')->get();

        $client = $client->count();


        if (!$session_detail) {
            return $this->sendError('Session Detail');
        }
        $bookedsession = json_decode($session_detail, true);
        $rating        = json_decode($rating, true);
        // $client = json_decode($client, true);
        // dd($client);

        return view('pages.userdashboard.dashboard.user-session-one', compact('bookedsession', 'classes', 'rating', 'client'));
    }
    ///////.........user dashboard upcoming , current , past session .......//////
    public function UserBookedSession()
    {
        $user_detail    = BookedSession::where('user_id', '=', auth()->user()->id)->with('user')->first();
        $currentsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer')->get();
        // $total_currentsession = $currentsession->count();

        $upcomingsession       = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', '>', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer')->get();
        $total_upcomingsession = $upcomingsession->count();

        $pastsession       = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', '<', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer')->get();
        $total_pastsession = $pastsession->count();

        $rawQuery      = DB::table('booked_sessions')
            ->join('sessions', 'booked_sessions.session_id', '=', 'sessions.id')
            ->join('classes', 'sessions.class_id', '=', 'classes.id')
            ->join('users', 'classes.trainer_id', '=', 'users.id')
            ->select(DB::raw("(classes.trainer_id) as stocks_quantity"))
            ->groupBy('stocks_quantity')
            ->get();
        $total_trainer = $rawQuery->count();

        $sessionDates = BookedSession::where('user_id', '=', auth()->user()->id)->with('user')->groupBy('session-date')->pluck('session-date');

        if (!$currentsession) {
            return $this->sendError('Session Detail');
        }
        $current_session  = json_decode($currentsession, true);
        $upcoming_session = json_decode($upcomingsession, true);
        $past_session     = json_decode($pastsession, true);
        $user             = json_decode($user_detail, true);
        $rawQuery         = json_decode($rawQuery, true);
        $sessionDates     = json_decode($sessionDates, true);
        if (count($upcoming_session) <= 0 && count($past_session) <= 0) {
            return view('pages.userdashboard.dashboard.dashboard-null');
        }
        return view('pages.userdashboard.dashboard.user-dashboard', compact('current_session', 'upcoming_session', 'total_upcomingsession', 'past_session', 'total_pastsession', 'user', 'total_trainer', 'sessionDates'));
    }
    //// get all category ...........//////////
    public function categoryDetail($id)
    {

        $class_detail = Category::all();

        if (!$class_detail) {
            return $this->sendError('Dashboard');
        }

        // $trainersView = $this->category_trainer($class_detail[0]['id']);
        $trainersView = $this->category_trainer($id);


        $class = json_decode($class_detail, true);
        // echo '<pre>';
        // print_r($trainerDetails);
        // exit;
        // dd($class);
        return view('pages.userdashboard.explore.categories', compact('class', 'trainersView'));
    }
    //////// dashoboard category show specific category trainer.........//////////
    public function category_trainer($id)
    {

        $trainerDetails = Category::where('id', $id)->with([
            'trainerCategory.classSession:id,class_id,start_time,end_time,price',
            'trainerCategory.trainer'
        ])->get();

        $trainerDetails = json_decode($trainerDetails, true);

        $trainersView = View::make('pages.userdashboard.explore.trainers_list', [
            'trainerDetails' => $trainerDetails[0]['trainer_category'],
            'category'       => $trainerDetails[0]['title']
        ])->render();

        return [
            'trainersView' => $trainersView,
            'category'     => $trainerDetails[0]['title']
        ];
    }
    /////..render view to categories.blad. php......../////
    public function get_sessions_list($id)
    {

        $trainersView = $this->category_trainer($id);

        return $this->sendResponse(
            $trainersView,
            'Trainer Detail insert Successfully!'
        );
    }

    // get class details 
    public function classDetails(Request $request)
    {

        $session = ModelsSession::where('id', '=', $request->class_id)->with('category', 'session_image')->get();

        if (!$session) {
            return $this->sendError('No class found against ID');
        }

        $session_detail = json_decode($session, true);

        // Calculate time difference 
        $start_time                = $session_detail[0]['start_time'];
        $end_time                  = $session_detail[0]['end_time'];
        $start_datetime            = new DateTime(date('Y-m-d') . ' ' . $start_time);
        $end_datetime              = new DateTime(date('Y-m-d') . ' ' . $end_time);
        $timeDiff                  = $start_datetime->diff($end_datetime);
        $hours                     = $timeDiff->format('%h');
        $mins                      = $timeDiff->format('%i');
        $session_detail['hours']   = $hours;
        $session_detail['minutes'] = $mins;

        return $this->sendResponse($session_detail, 'Class details found Successfully!');
    }

    ////////........get seasion by day.....////////

    public function getDaySession(Request $request)
    {
        $session = ModelsSession::where(['trainer_id' => $request->trainer, 'day' => $request->day])->with('category', 'session_image')->get();
        if (!$session) {
            return $this->sendError('No Data found against ID');
        }
        // dd(json_decode($session, true));
        return $this->sendResponse($session, 'Get Session Successfully!');
    }

    ///////////..........search booked session ......///////

    public function SearchResult(Request $request)
    {
        // dd($request->all());
        $whereCategory = [];
        if ($request->has('category') && !empty($request->category)) {
            array_push($whereCategory, ['id', '=', $request->category]);
        }
        $booksession = (new BookedSession)->newQuery();

        $whereSession = [];
        if ($request->has('type') && ($request->type == 1 || $request->type == 0) && $request->type != "") {
            array_push($whereSession, ['type', '=', $request->type]);
        }
        if ($request->has('price') && !empty($request->price)) {
            $price = explode('|', $request->price);


            array_push($whereSession, ['price', '>=', $price[0]]);
            if (isset($price[1])) {
                array_push($whereSession, ['price', '<=', $price[1]]);
            }
        }
        // dd($whereSession);
        $booksession = $booksession->where('user_id', auth()->user()->id)->with([
            'session'                => function ($query) use ($whereSession) {
                if (!empty($whereSession)) {
                    $query->where($whereSession);
                }
            },
            'session.class.trainer',
            'session.class.category' => function ($query) use ($whereCategory) {
                if (!empty($whereCategory)) {
                    $query->where($whereCategory);
                }
            },
            'session.session_image'
        ])->get();


        // dd($currentUserInfo);
        // $categories = Category::all();
        if (!$booksession) {
            return $this->sendError('Session Detail');
        }
        $booksession_detail = json_decode($booksession, true);

        $sessionView = View::make('pages.userdashboard.dashboard.booked-session-list', [
            'booksession_detail' => $booksession_detail,
        ])->render();
        return [
            'sessionView' => $sessionView,
            'session'     => $booksession_detail
        ];
        // return $this->sendResponse($booksession_detail, 'Get Session Successfully!');
    }
    ////////////......Review......./////
    public function ratingStar(Request $request)
    {

        $rating = Review::create(
            [
                'user_id'     => auth()->user()->id,
                'session_id'  => $request->session_id,
                'trainer_id'  => $request->trainer_id,
                'rating'      => $request->rating,
                'description' => $request->description,
            ]
        );
        if (!$rating) {
            return $this->sendError('Process Fail');
        }

        return redirect()->back();
    }

    public function userPaymentsList(Request $request)
    {
        $payments = Transactions::where('user_id', auth()->user()->id)->with('session', 'session.category', 'session.trainerData')->get();
        $payments = json_decode($payments, true);

        return view('pages.userdashboard.payment.payment', compact('payments'));
    }

    public function sessionDetails($id)
    {
        $session_detail = BookedSession::where('id', $id)->with('session.class.trainer', 'session.class.category', 'session.class.classImage')->first();
        $classes        = ModelsSession::where('trainer_id', '=', $session_detail['session']['class']['trainer']['id'])->count();
        $rating         = Review::where('session_id', $id)->with('user:id,name,profile_img')->get();

        if (!$session_detail) {
            return $this->sendError('Session Detail');
        }
        $bookedsession = json_decode($session_detail, true);
        $rating        = json_decode($rating, true);
        return view('pages.userdashboard.payment.payment-detail', compact('bookedsession', 'classes', 'rating'));
    }
    ////////.......get user trainer........///////
    public function usersTrainerbk()
    {

        $getTrainers = DB::table('booked_sessions')
            ->join('sessions', 'booked_sessions.session_id', '=', 'sessions.id')
            ->join('users', 'sessions.trainer_id', '=', 'users.id')
            ->where('booked_sessions.user_id', auth()->user()->id)
            // ->select("*")
            // ->groupBy('booked_sessions.id')
            ->get();
        // dd($getTrainers);
        if (!$getTrainers) {
            return $this->sendError('No Data found against ID');
        }
        $trainer = json_decode($getTrainers, true);
        return view('pages.userdashboard.dashboard.all-trainer', compact('trainer'));
    }

    public function usersTrainer()
    {

        $sessionIds  = BookedSession::where('user_id', auth()->user()->id)->pluck('session_id');
        $getTrainers = ModelsSession::whereIn('id', $sessionIds)->groupBy('trainer_id')->with(['trainerData'])->get();
        if (!empty($getTrainers)) {
            foreach ($getTrainers as $trainerId) {
                $trainerId['sessionCount'] = ModelsSession::where('trainer_id', $trainerId['trainer_id'])->count();
            }
        }
        if (!$getTrainers) {
            return $this->sendError('No Data found against ID');
        }
        $trainer = json_decode($getTrainers, true);
        return view('pages.userdashboard.dashboard.all-trainer', compact('trainer'));
    }
    /////////////...past session..........//////
    public function allPastSession()
    {
        $pastsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', '<', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer')->get();
        if (!$pastsession) {
            return $this->sendError('No Data found against ID');
        }
        $pastsession = json_decode($pastsession, true);

        // dd($pastsession);
        return view('pages.userdashboard.dashboard.user-past-session', compact('pastsession'));
    }

    /////  upcoming session.............////
    public function upcomingSession()
    {
        $currentsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', '=', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer', 'session.session_image')->get();

        $upcomingsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('session-date', '>', now()->format('Y-m-d'))->with('session.class.category', 'session.class.trainer', 'session.session_image')->get();
        if (!$currentsession) {
            return $this->sendError('No Data found against ID');
        }
        $currentsession  = json_decode($currentsession, true);
        $upcomingsession = json_decode($upcomingsession, true);
        // dd($upcomingsession);
        return view('pages.userdashboard.dashboard.upcoming-session-list', compact('currentsession', 'upcomingsession'));
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = public_path('uploads/');
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $image->move($path, $filename);
            $path = public_path('uploads/' . $filename);
            return response()->json([
                'path' => $path
            ]);
        }
        return response()->json([
            'error' => 'No file uploaded'
        ]);
    }
    ////...........chat list.........../////
    public function chatList()
    {
        // dd('hi');
        // $chat_lists = Chat::whereIn('users', [auth()->user()->id])->with('session.category', 'session.session_image')->get();
        $userId = auth()->user()->id;

        $chat_lists = Chat::where(function ($query) use ($userId) {
            $query->where('users', 'LIKE', '%,' . $userId . ',%')
                ->orWhere('users', 'LIKE', $userId . ',%')
                ->orWhere('users', 'LIKE', '%,' . $userId)
                ->orWhere('users', '=', $userId);
        })
            ->with('session.category', 'session.session_image')
            ->get();


        if (!$chat_lists) {
            return $this->sendError('No Data found against ID');
        }
        $chatView = '';

        $chat_lists = json_decode($chat_lists, true);

        return view('pages.userdashboard.chat.chat', compact('chat_lists', 'chatView'));
    }
    ///////........messages shoe.............////////
    public function messages($id)
    {
        // dd('hiaha');
        $chatDetails = Message::where('chat_id', $id)->get();

        $chatDetails = json_decode($chatDetails, true);
        // dd($chatDetails[0]['text']);
        $chatView = View::make('pages.userdashboard.chat.messagelist', [
            'chatDetails' => $chatDetails,

            // 'category'       => $trainerDetails[0]['title']
        ])->render();

        return [
            'chatView' => $chatView,

        ];
    }
}
