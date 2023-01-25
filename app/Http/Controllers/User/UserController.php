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
use App\Models\Classes;
use App\Models\ContactUs;
use App\Models\Customer;
use App\Models\Session as ModelsSession;
use DateTime;
use Stripe;
use Throwable;
use DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    use ResponseTrait;
    ///////// category Trainer Api...../////////
    public function getTrainerCategory(Request $request)
    {

        if ($request->has('id')) {
            $trainer_category = Category::where('id', $request->id)->with('trainerCategory.trainer')->first();
        } else {
            $trainer_category = Category::with('trainerCategory.trainer')->get();
        }

        if (!$trainer_category) {
            return $this->sendError('Category');
        }
        $responseBody = $trainer_category;
        $userdata = json_decode($responseBody, true);
        // dd($userdata);
        return view('pages.website.all-trainers-web', compact('userdata'));
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
        $userdata = json_decode($responseBody, true);

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
            $image = url('public/files') . '/' .  $fileNames;
            // return $this->sendResponse($image, 'URL');
        }
        $data = request()->except(['_token']);
        if ($request->has('files')) {
            unset($data['files']);
            $data['profile_img'] = $image;
        }
        $update = User::findOrFail($request->user_id);
        $updateUser = $update->fill($data)->save();
        if (!$updateUser) {
            Session::flash('error', 'Something went wrong, please try again later.');
            return redirect()->back();
        }
        flash()->success('Profile Updated Successfuly!');
        return view('pages.website.update-profile');
    }

    ///   stripe payment .....///////
    public function paymentIntent(Request $request)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $month = date('m', strtotime($request->valid_through));
        $year = date('Y', strtotime($request->valid_through));


        $response = \Stripe\Token::create(array(
            "card" => array(
                "number"    => $request->input('card_number'),
                "exp_month" => $month,
                "exp_year"  => $year,
                "cvc"       => $request->input('cvc'),
                "name"      => $request->input('name')
            )
        ));

        $card_token = $response->id;
        $userId = auth()->user()->id;


        $customer = $stripe->customers->create([
            'description' => 'Customer create successfully',
            'source' => $card_token
        ]);

        $ephemeralKey = \Stripe\EphemeralKey::create(
            ['customer' => $customer->id],
            ['stripe_version' => '2020-08-27']
        );



        Customer::create([
            "card_name"      => $request->input('name'),
            "card_number"    => $request->input('card_number'),
            'customer_id' => $customer->id,
            'user_id' => $userId,
            'type' => 'CREDIT CARD',
            'valid_thru' => $month . '/' . $year
        ]);

        $pay_int_res = [
            'result' => 'Success',
            'message' => 'Customer create successfully',
            'stripe_publish_key' => env('STRIPE_KEY'),
            // 'payment_intent' => $paymentIntent->client_secret,
            'ephemeral_key' => $ephemeralKey->secret,
            'customer_id' => $customer->id
        ];


        // return $this->sendResponse($pay_int_res, 'Payment Intent');
        return view('pages.website.payment');
    }
    /////......contact........////
    public function contactUs(ContactUsRequest $request)
    {
        $contact_us = new ContactUs();
        $contact_us->name = $request->full_name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone_number;
        $contact_us->message = $request->message;
        if (!$contact_us) {
            return $this->sendError('Contact');
        }
        $contact_us->save();
        return redirect()->back();
    }

    /////.....get all trainer........./////
    public function dashbord()
    {
        $all_trainer = User::where('user_type', '=', 'trainer')->get();
        // Classes::with('session', 'category')->get();
        $class_detail = Classes::with(['category', 'session', 'trainer'])->get();

        $all_category = Category::get();
        if (!$all_trainer) {
            return $this->sendError('Dashboard');
        }
        $trainers = json_decode($all_trainer, true);
        $class = json_decode($class_detail, true);

        $category = json_decode($all_category, true);
        return view('pages.userdashboard.explore.dashboard', compact('trainers', 'category', 'class'));
    }
    /////....user side trainer detail......../////
    public function trainer_detail(Request $request, $id)
    {
        $trainer = User::where('id', '=', $id)->with(['class.category', 'class.session'])->get();
        if (!$trainer) {
            return $this->sendError('Trainer Detail');
        }
        $trainer_detail = json_decode($trainer, true);

        return view('pages.userdashboard.explore.trainer-detail', compact('trainer_detail'));
    }
    ///////// .....class detail .............////////
    public function class_detail(Request $request, $id)
    {

        $class = Classes::where('id', '=', $id)->with('session', 'category')->get();
        if (!$class) {
            return $this->sendError('Session Detail');
        }
        $class_detail = json_decode($class, true);

        return view('pages.userdashboard.explore.class-detail', compact('class_detail'));
    }
    //////customer card detail........./////////

    public function showCard(Request $request)
    {

        $card = Customer::where('user_id', auth()->user()->id)->get();
        $session_detail = ModelsSession::where('id', $request->session_id)->first();

        if (!$card) {
            return $this->sendError('Card');
        }
        $card_detail = json_decode($card, true);
        $session = json_decode($session_detail, true);


        return view('pages.userdashboard.explore.payment', compact('card_detail', 'session'));
    }

    /////// card payment......///////
    public function cardPayment(Request $request)
    {
        $customerId = $request->customer;

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        try {

            $payment = \Stripe\Charge::create(array(
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "customer" => $customerId
            ));

            if ($payment['status'] = "succeeded") {
                $status = true;
            } else {
                $status = false;
            }

            $booksession = BookedSession::create(array(
                'session_id' => $request->session_id,
                'user_id' => auth()->user()->id,
                'customer_id' => $request->customer_id,
                'is_completed' => $status,
            ));
        } catch (Throwable $e) {

            return $this->sendError(false, $e);
        }
        return redirect()->route('/dashboard');

        // return $this->sendResponse([], 'Payment successfully Done!');
    }
    //////////.......get all booked session .......///////
    public function getBookedSession()
    {
        $booksession = BookedSession::where('user_id', auth()->user()->id)->with('session.class.trainer', 'session.class.category')->get();
        if (!$booksession) {
            return $this->sendError('Session Detail');
        }
        $booksession_detail = json_decode($booksession, true);

        return view('pages.userdashboard.dashboard.user-session', compact('booksession_detail'));
    }
    //////// view booked session.........//////
    public function viewSession($id)
    {
        $session_detail = BookedSession::where('id', $id)->with('session.class.trainer', 'session.class.category')->first();
        if (!$session_detail) {
            return $this->sendError('Session Detail');
        }
        $bookedsession = json_decode($session_detail, true);

        return view('pages.userdashboard.dashboard.user-session-one', compact('bookedsession'));
    }
    ///////.........user dashboard upcoming , current , past session .......//////
    public function UserBookedSession()
    {
        $user_detail = BookedSession::where('user_id', '=', auth()->user()->id)->with('user')->first();

        $currentsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('created_at', '=', now()->day)->with('session.class.category', 'session.class.trainer')->get();
        // $total_currentsession = $currentsession->count();

        $upcomingsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('created_at', '<', now()->day)->with('session.class.category', 'session.class.trainer')->get();
        $total_upcomingsession = $upcomingsession->count();

        $pastsession = BookedSession::where('user_id', '=', auth()->user()->id)->where('created_at', '>', now()->day)->with('session.class.category', 'session.class.trainer')->get();
        $total_pastsession = $pastsession->count();


        $rawQuery = DB::table('booked_sessions')
            ->join('sessions', 'booked_sessions.session_id', '=', 'sessions.id')
            ->join('classes', 'sessions.class_id', '=', 'classes.id')
            ->join('users', 'classes.trainer_id', '=', 'users.id')
            ->select(DB::raw("(classes.trainer_id) as stocks_quantity"))
            ->groupBy('stocks_quantity')
            ->get();
        // dd($rawQuery->count());
        $total_trainer = $rawQuery->count();

        if (!$currentsession) {
            return $this->sendError('Session Detail');
        }
        $current_session = json_decode($currentsession, true);
        $upcoming_session = json_decode($upcomingsession, true);
        $past_session = json_decode($pastsession, true);
        $user = json_decode($user_detail, true);




        return view('pages.userdashboard.dashboard.user-dashboard', compact('current_session', 'upcoming_session', 'total_upcomingsession', 'past_session', 'total_pastsession', 'user', 'total_trainer'));
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
            'trainerDetails' =>         $trainerDetails[0]['trainer_category'],
            'category' => $trainerDetails[0]['title']
        ])->render();

        return [
            'trainersView' => $trainersView,
            'category' => $trainerDetails[0]['title']
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
    
}
