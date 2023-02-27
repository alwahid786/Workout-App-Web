<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Redirect;

class TrainerController extends Controller
{
    use ResponseTrait;
    public function showTrainerDetail()
    {
        $trainer = User::where('id', auth()->user()->id)->with('trainer_profile', 'session.category', 'session.session_image')->first();
        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $trainer  = json_decode($trainer, true);

        return view('pages.trainerSide.account-step-five', compact('trainer'));
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
}
