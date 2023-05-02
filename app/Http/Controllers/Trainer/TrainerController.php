<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Traits\NotificationTrait;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Models\BookedSession;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Classes;
use App\Models\ClassImage;
use App\Models\Notification;
use App\Models\RejectSession;
use App\Models\Review;
use App\Models\Session;
use App\Models\SessionImage;
use App\Models\CertificateImage;
use App\Models\TrainerProfile;
use App\Models\WorkoutLocation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Js;
use Stevebauman\Location\Facades\Location;
// use App\Models\WorkoutLocation;



class TrainerController extends Controller
{
    use ResponseTrait;
    use NotificationTrait;
    public function showTrainerDetail()
    {
        $trainer = User::where('id', auth()->user()->id)->with('trainer_profile', 'session.category', 'session.session_image')->first();
        $category = Category::get();
        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $certificates = CertificateImage::where('trainer_id', auth()->user()->id)->get();
        $trainer  = json_decode($trainer, true);
        $category = json_decode($category, true);
        $certificates = json_decode($certificates, true);
        return view('pages.trainerSide.account-step-five', compact('trainer', 'category', 'certificates'));
    }
    /////////////.........update trainer...............//////////////
    public function updateTrainer(Request $request)
    {
        // dd($request->all());
        $ip = $request->ip(); /* Dynamic IP address */
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        // Extract the latitude and longitude from the location information
        $latitude = $currentUserInfo->latitude;
        $longitude = $currentUserInfo->longitude;
        $update = User::where('id', auth()->user()->id)->update(
            [
                'password' => bcrypt($request->password),
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'country' => $request->country,
                'state' => $request->state,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'about' => $request->about,
                'emergency_contact' => $request->emergency_contact,
                'relationship_emergency_contact' => $request->relationship_emergency_contact
            ]
        );
        if (!$update) {
            return $this->sendError('No Data found against ID');
        }
        $locations = $request->workout_location;
        if (!empty($locations)) {
            // $locations = array_map('intval', explode(',', $locations));
            $locations = json_decode($locations, true);
            // dd($locations);
            foreach ($locations as $location) {
                $workout_location = new WorkoutLocation();
                $workout_location->tag = $location['tag'];
                $workout_location->location = $location['name'];
                $workout_location->trainer_id = auth()->user()->id;
                $workout_location->save();
            }
        }
        if ($request->pass == 1) {
            return redirect()->back();
        }
        return redirect()->route('trainer/stepfive');
    }
    //............show trainer profile in update page..............//

    public function showupdate()
    {
        $trainer = User::where('id', auth()->user()->id)->with('trainer_profile')->first();

        $certificates = CertificateImage::where('trainer_id', auth()->user()->id)->get();
        $lacation = WorkoutLocation::where('trainer_id', auth()->user()->id)->get();


        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $trainer = json_decode($trainer, true);
        $certificates = json_decode($certificates, true);
        $locations = json_decode($lacation, true);

        return view('pages.trainerSide.update-profile', compact('trainer', 'certificates', 'locations'));
    }

    /////////update session ......../////////
    public function updateSession(Request $request)
    {

        // Session::where('id', $request->session_id)->delete();
        $images = $request->file('myfile');
        $paths = [];
        foreach ($images as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = public_path('uploads/');
            if (!is_dir($path)) {
                mkdir(
                    $path,
                    0777,
                    true
                );
            }
            $image->move($path, $filename);
            $paths[] = public_path('uploads/' . $filename);
        }

        $startMeridiem = date('a', strtotime($request->startTime));
        $endMeridiem = date('a', strtotime($request->endTime));
        $session = Session::where('id', $request->session_id)->update([

            'trainer_id' => auth()->user()->id,
            'category_id' => $request->category_id,

            'sub_category' => $request->category_description,
            'preference' => $request->preference,
            'price_unit' => $request->price_unit,

            'day' => $request->day,

            'price' => $request->price,
            'difficulty_level' => $request->difficulty_level,
            'type' => $request->type,
            'start_time' => $request->startTime,
            'end_time' => $request->endTime,
            'start_meridiem' => $startMeridiem,
            'end_meridiem' => $endMeridiem,


        ]);
        if (!$session) {
            return $this->sendError('No Data found against ID');
        }
        // dd($request->session_images);

        $images = $request->file('images');


        SessionImage::where('session_id', $request->session_id)->delete();
        foreach ($paths as  $session_image) {
            $images = new SessionImage();
            $images->image = $session_image;
            $images->session_id = $request->session_id;
            $images->save();
        }


        return redirect()->route('trainer/stepfive');
    }
    ////////.......delete session..........///////
    public function deleteSession(Request $request)
    {
        $class = Session::where('id', $request->session_id)->pluck('class_id');
        $session = Session::where('id', $request->session_id)->delete();
        // $class = json_decode($class, true);
        // dd($class);
        $class_delete = Classes::whereIn('id', $class)->delete();
        if (!$session) {
            return $this->sendError('No Data found against ID');
        }
        SessionImage::where('session_id', $request->session_id)->delete();

        return redirect()->route('trainer/stepfive');
    }
    ////.....submit trainer request .............//////
    public function submitTrainerRequest()
    {
        $trainerProfile = TrainerProfile::where('user_id', auth()->user()->id)->update(['page' => 5]);
        if (!$trainerProfile) {
            return $this->sendError('No Data found against ID');
        }
        return Redirect::to(url('/trainer/pending'));

        // return redirect()->route('nullDashboard');
    }
    ////.............trainer.dashboard.............///
    public function trainerDashboard()
    {
        $today_sessions = BookedSession::where([
            ['trainer_id', '=', auth()->user()->id],
            ['session-date', '=', now()->format('Y-m-d')],
            ['status', '=', 1],
        ])->with('session.category', 'session.session_image')->get();

        $upcoming_sessions = BookedSession::where([
            ['trainer_id', '=', auth()->user()->id],
            ['session-date', '>', now()->format('Y-m-d')],
            ['status', '=', 1],
        ])->with('session.category', 'session.session_image')->get();
        // dd($upcoming_sessions);
        $past_sessions = BookedSession::where([
            ['trainer_id', '=', auth()->user()->id],
            ['session-date', '<', now()->format('Y-m-d')],
            ['status', '=', 1],
        ])->with('session.category', 'session.session_image')->get();
        $rating         = Review::where('trainer_id', auth()->user()->id)->with('user:id,name,profile_img')->get();
        $notification = Notification::where(['reciever_id' => auth()->user()->id, 'is_read' => 0])->with('user')->get();
        if (!$today_sessions) {
            return $this->sendError('No Data found against ID');
        }
        $today_sessions = json_decode($today_sessions, true);
        $upcoming_sessions = json_decode($upcoming_sessions, true);
        $past_sessions = json_decode($past_sessions, true);
        $rating        = json_decode($rating, true);
        $notifications        = json_decode($notification, true);

        // dd(now()->format('d-m-y'));
        return view('pages.trainerSide.dashboard', compact('today_sessions', 'upcoming_sessions', 'past_sessions', 'rating', 'notifications'));
    }

    // public function sessionDetail($id)
    // {

    //     $session_detail = BookedSession::where('id', $id)->with('session.trainerData', 'session.category', 'session.session_image')->first();
    //     $rating         = Review::where('session_id', $session_detail['session']['id'])->with('user:id,name,profile_img')->get();

    //     if (!$session_detail) {
    //         return $this->sendError('Session Detail');
    //     }
    //     $bookedsession = json_decode($session_detail, true);
    //     $rating        = json_decode($rating, true);
    //     // dd($bookedsession);
    //     // dd($rating);

    //     return view('pages.trainerSide.trainer-session-one', compact('bookedsession', 'rating'));
    // }

    public function sessionDetail($id, $booked_id = "")
    {

        // dd($booked_id);

        // $session_detail = BookedSession::where('id', $id)->with('session.trainerData', 'session.category', 'session.session_image')->first();
        $session_detail = Session::where('id', $id)->with(['booked_session' => function ($query) use ($booked_id) {
            $query->where('id', $booked_id);
        }])->with('category', 'trainerData', 'session_image', 'location')->first();
        $rating         = Review::where('session_id', $id)->with('user:id,name,profile_img')->get();

        if (!$session_detail) {
            return $this->sendError('Session Detail');
        }
        $session = json_decode($session_detail, true);
        $rating        = json_decode($rating, true);
        // dd($session);
        return view('pages.trainerSide.trainer-session-one', compact('session', 'rating'));
    }

    //////////////.............. total client........../////
    public function client()
    {
        $clients         = BookedSession::where('trainer_id', auth()->user()->id)->groupBy('user_id')->with('user', 'session.category')->get();
        $categories = Category::get();
        if (!$clients) {
            return $this->sendError('Client not found');
        }
        $clients = json_decode($clients, true);
        $categories = json_decode($categories, true);
        // dd($client);
        return view('pages.trainerSide.client-list', compact('clients', 'categories'));
    }
    //////////........user detail.........//////
    public function userDetail($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return $this->sendError('Client not found');
        }
        $user = json_decode($user, true);
        // dd($user);
        return view('pages.trainerSide.profile', compact('user'));
    }
    /////////.......search category with user.......///////////
    public function categoryFilter(Request $request)
    {
        $clients = (new BookedSession())->newQuery();
        if ($request->has('search_by')) {
            $search_by = $request->search_by;

            $clients->where(function ($query) use ($search_by) {
                $query->whereHas('user', function ($query) use ($search_by) {
                    $query->where('name', 'like', '%' . $search_by . '%');
                })
                    ->orWhereHas('session', function ($query) use ($search_by) {
                        $query->where('day', 'like', '%' . $search_by . '%');
                    })
                    ->orWhereHas('session.category', function ($query) use ($search_by) {
                        $query->where('title', 'like', '%' . $search_by . '%');
                    });
            });
        }

        $clients = $clients->where('trainer_id', auth()->user()->id)->groupBy('user_id')->with('user', 'session.category')->get();

        if (!$clients) {
            return $this->sendError('Client not found');
        }
        $clients = json_decode($clients, true);

        return $this->sendResponse(
            [
                'client' => $clients,
            ],
            'Successfully Search'
        );
    }
    //////// class detail////////
    public function classDetail($id = '')
    {
        if ($id == "") {
            $category = '';
            $sessions = Session::where('trainer_id', auth()->user()->id)->with('category', 'session_image')->get();
            if (!$sessions) {
                return $this->sendError('session not found');
            }
            $sessions = json_decode($sessions, true);
        } else {
            $sessions = '';
            $category = Category::where('id', $id)
                ->with(['session' => function ($query) {
                    $query->where('trainer_id', auth()->user()->id)
                        ->with('session_image');
                }])
                ->first();
            if (!$category) {
                return $this->sendError('Categories not found');
            }
            $categories = json_decode($category, true);
        }
        return view('pages.trainerSide.session', compact('category', 'sessions'));
    }
    /////////// calender page ////////
    public function calenderSession()
    {
        $session = BookedSession::where('trainer_id', auth()->user()->id)->with('session.category')->get();
        $sessions = json_decode($session, true);
        $calArray = [];
        foreach ($sessions as $session) {
            $calender = [
                'title' => $session['session']['category']['title'],
                'start' => $session['session-date'] . 'T' . $session['session']['start_time'],
                'id' => $session['session']['id'],

            ];
            array_push($calArray, $calender);
        }
        // dd($calArray);

        return view('pages.trainerSide.calendar', compact('calArray'));
    }
    //// navbar notification 
    public function notification()
    {
        $notification = Notification::where(['reciever_id' => auth()->user()->id, 'is_read' => 0])->with('user')->get();
        if (!$notification) {
            return $this->sendError('There is no Data');
        }
        $notifications = json_decode($notification, true);
        return $this->sendResponse(['notification' => $notifications], 'Get notification successfully');
    }

    /////////trainer responce
    public function actionSession(Request $request)
    {
        // dd($request->user_id);
        if ($request->accept == 1) {
            // dd($request->booked_session_id);
            $accept = BookedSession::where('id', $request->booked_session_id)->update([
                'status' => 1
            ]);
            Notification::where(['type_id' => $request->booked_session_id, 'sender_id' => $request->user_id])->update([
                'is_read' => 1
            ]);
            $reciever_id = $request->user_id;
            $type_id = $request->booked_session_id;
            $noti_type = 'accept_request';
            $noti_text = 'your request is Accepted';
            $notification = $this->sendNotification($reciever_id, $type_id, $noti_type, $noti_text);
        } else {
            $reject_session = RejectSession::create([
                'trainer_id' => $request->trainer_id,
                'user_id' => $request->user_id,
                'booked_session_id' => $request->booked_session_id,
                'reason' => $request->reason,
            ]);
            Notification::where(['type_id' => $request->booked_session_id, 'sender_id' => $request->user_id])->update([
                'is_read' => 1
            ]);
            $reciever_id = $request->user_id;
            $type_id = $request->booked_session_id;
            $noti_type = 'reject_request';
            $noti_text = 'your request is Rejected';
            $notification = $this->sendNotification($reciever_id, $type_id, $noti_type, $noti_text);
        }
        return redirect()->back();
    }


    /////// trainer chat list...........///////
    public function trainerChatList()
    {
        $chatlist = Chat::where('trainer_id', auth()->user()->id)->with('session.category', 'session.session_image')->get();
        if (!$chatlist) {
            return $this->sendError('No Data found against ID');
        }
        $chatView = '';

        $chatlist = json_decode($chatlist, true);
        // dd($chatlist);

        return view('pages.trainerSide.message', compact('chatlist', 'chatView'));
    }

    public function addSession(Request $request)
    {
        $category = Category::all();
        if (!$category) {
            return $this->sendError('No Data found against ID');
        }
        $locations = WorkoutLocation::where('trainer_id', auth()->user()->id)->get();
        $categories = json_decode($category, true);
        $locations = json_decode($locations, true);
        return view('pages.trainerSide.add-session', compact('categories', 'locations'));
    }
    ///////delete certificate///////
    public function delCertificate($id)
    {
        // dd($id);
        $certificate = CertificateImage::where('id', $id)->delete();
        if (!$certificate) {
            return $this->sendError('No Data found against ID');
        }
        return redirect()->back();
    }

    ////////delete Location..........//////
    public function delLocation($id)
    {
        $location = WorkoutLocation::where('id', $id)->delete();
        if (!$location) {
            return $this->sendError('No Data found against ID');
        }
        return redirect()->back();
    }
    ///stripe connection ///
    public function connect_stripe(Request $request)
    {
        $data = "https://connect.stripe.com/express/oauth/authorize?redirect_uri=" . config('app.stripe_redirected_url') . "&client_id=" . config('app.stripe_client_id') . "&scope=read_write&state=" . bcrypt('123456');;
        return redirect($data);
        // dd($data);        // return $this->sendResponse($data, 'success');
    }
}
