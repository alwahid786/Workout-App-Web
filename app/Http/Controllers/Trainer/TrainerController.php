<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Models\BookedSession;
use App\Models\Category;
use App\Models\Classes;
use App\Models\ClassImage;
use App\Models\Review;
use App\Models\Session;
use App\Models\SessionImage;
use App\Models\TrainerProfile;
use Illuminate\Support\Facades\Redirect;

class TrainerController extends Controller
{
    use ResponseTrait;
    public function showTrainerDetail()
    {
        $trainer = User::where('id', auth()->user()->id)->with('trainer_profile', 'session.category', 'session.session_image')->first();
        $category = Category::get();
        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $trainer  = json_decode($trainer, true);
        $category = json_decode($category, true);
        // dd($category);
        return view('pages.trainerSide.account-step-five', compact('trainer', 'category'));
    }
    /////////////.........update trainer...............//////////////
    public function updateTrainer(Request $request)
    {

        $update = User::where('id', auth()->user()->id)->update(
            [
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'country' => $request->country,
                'state' => $request->state,
            ]
        );
        if (!$update) {
            return $this->sendError('No Data found against ID');
        }
        return redirect()->route('trainer/stepfive');
    }
    //............show trainer profile in update page..............//

    public function showupdate()
    {
        $trainer = User::where('id', auth()->user()->id)->first();

        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $trainer = json_decode($trainer, true);

        return view('pages.trainerSide.update-profile', compact('trainer'));
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
        $trainerProfile = TrainerProfile::where('user_id', auth()->user()->id)->update(['status' => 1, 'page' => 5]);
        if (!$trainerProfile) {
            return $this->sendError('No Data found against ID');
        }
        return redirect()->route('trainer/stepfive')->with(['successCode' => 1]);
    }
    ////.............trainer.dashboard.............///
    public function trainerDashboard()
    {
        $today_sessions = BookedSession::where('trainer_id', auth()->user()->id)->where('session-date', now()->format('Y-m-d'))->with('session.category', 'session.session_image')->get();
        $upcoming_sessions = BookedSession::where('trainer_id', auth()->user()->id)->where('session-date', '>', now()->format('Y-m-d'))->with('session.category', 'session.session_image')->get();
        $past_sessions = BookedSession::where('trainer_id', auth()->user()->id)->where('session-date', '<', now()->format('Y-m-d'))->with('session.category', 'session.session_image')->get();
        $rating         = Review::where('trainer_id', auth()->user()->id)->with('user:id,name,profile_img')->get();

        if (!$today_sessions) {
            return $this->sendError('No Data found against ID');
        }
        $today_sessions = json_decode($today_sessions, true);
        $upcoming_sessions = json_decode($upcoming_sessions, true);
        $past_sessions = json_decode($past_sessions, true);
        $rating        = json_decode($rating, true);

        // dd($rating);
        return view('pages.trainerSide.dashboard', compact('today_sessions', 'upcoming_sessions', 'past_sessions', 'rating'));
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
        }])->with('category', 'trainerData', 'session_image')->first();
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
}
