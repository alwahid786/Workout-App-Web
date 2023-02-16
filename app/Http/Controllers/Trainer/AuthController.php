<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerSignupRequest;
use App\Models\TrainerProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    use ResponseTrait;

    ////// trainer sign up.......///////
    public function trainerSignup(Request $request)
    {
        $TrainerData = [
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'user_type' => 'trainer',
            'password' => bcrypt($request->password),
            'password_confirmation' => $request->confirm_password,
            // 'profile_img' => $request->image,
            'phone' => $request->contact_number,
            'about' => $request->about,

        ];
        $registeredTrainer = User::create($TrainerData);
        if (!$registeredTrainer) {
            return $this->sendError('User has not registered. Please try again later');
        }


        $trainerData  = User::find($registeredTrainer->id);
        $tarner_profile = TrainerProfile::create([
            'user_id' => $trainerData->id,
        ]);

        $trainerData->token = $registeredTrainer->createToken('API Token')->accessToken;
        // return $this->sendResponse($trainerData, 'Trainer Registered Successfully!');
        return Redirect::to('/trainer/steptwo');
    }

    /// update trainer screen 2.............../////
    public function updateProfileStwo(Request $request)
    {
        $data = $request->all();
        $user = User::where('id', auth()->user()->id)->update([$data]);
        if (!$user) {
            return $this->sendError('User has not registered. Please try again later');
        }

        return Redirect::to(url('/trainer/stepthree'));
    }
}
