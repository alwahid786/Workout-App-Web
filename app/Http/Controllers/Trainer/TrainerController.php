<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Models\Category;
use App\Models\Classes;
use App\Models\ClassImage;
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
        $session = Session::where('id', $request->session_id)->delete();
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
}
