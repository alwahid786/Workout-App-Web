<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerSignupRequest;
use App\Models\TrainerProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Redirect;
use Auth;

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
        $UserData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $trainerData  = User::find($registeredTrainer->id);
        Auth::loginUsingId($trainerData['id']);
        $tarner_profile = TrainerProfile::create([
            'user_id' => $trainerData->id,
        ]);
        // if (!auth()->attempt($UserData)) {
        //     return $this->sendError('Try again. Wrong password.Try again or click forget password to reset your password.');
        // }
        // $authUser = auth()->user();
        $trainerData->token = $trainerData->createToken('API Token')->accessToken;


        // return $this->sendResponse($trainerData, 'Trainer Registered Successfully!');
        return Redirect::to('/trainer/steptwo');
    }

    /// update trainer screen 2.............../////
    public function updateProfileStwo(Request $request)
    {
        $data = $request->all();
        // dd(auth()->user()->id);
        $trainer = User::where('id', auth()->user()->id)->update([
            'date_of_birth' => $request->date_of_birth,
            'emergency_contact' => $request->emergency_contact,
            'gender' => $request->gender,
            'country' => $request->country,
            'state' => $request->state,
            'workout_location' => $request->workout_location,
            'weight' => $request->weight,
            'weight_unit' => $request->weight_unit,
            'height' => $request->height,
            'hieght_unit' => $request->height_unit,
            'madical_condition' => $request->madical_condition,
            'relationship_emergency_contact' => $request->relation_emergency,
            // $data
        ]);
        $social = TrainerProfile::where('user_id', auth()->user()->id)->update([
            'facebook_url' => $request->facebook,
            'instagram_url' => $request->instagram,
            'linkedin_url' => $request->linkedin
        ]);
        if (!$trainer) {
            return $this->sendError('User has not registered. Please try again later');
        }

        return Redirect::to(url('/trainer/stepthree'));
    }
}
