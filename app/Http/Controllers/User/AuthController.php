<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\TrainerDetailRequest;
use App\Http\Requests\TrainerSignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Classes;
use App\Models\ClassImage;
use App\Models\Session;
use App\Models\SessionImage;
use App\Models\TrainerProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Redirect;
// use HasApiTokens;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    use ResponseTrait;
    //// user Registeration......./////
    public function register(RegisterRequest $request)
    {
        $UserData = [
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => 'user',
            'password' => bcrypt($request->password)
        ];

        $registeredUser = User::create($UserData);
        if (!$registeredUser) {
            return $this->sendError('User has not registered. Please try again later');
        }

        $userData  = User::find($registeredUser->id);
        $userData->token = $registeredUser->createToken('API Token')->accessToken;
        return $this->sendResponse($userData, 'User Registered Successfully!');
    }


    // user Login 
    public function login(LoginRequest $request)
    {
        $UserData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!auth()->attempt($UserData)) {
            return $this->sendError('Try again. Wrong password.Try again or click forget password to reset your password.');
        }
        $authUser = auth()->user();
        $authUser->token = $authUser->createToken('API Token')->accessToken;
        return $this->sendResponse($authUser, 'Login Successful!');
    }

    // Verify Email And Send OTP 
    public function verifyEmail(Request $request)
    {
        $otp = rand(100000, 999999);
        if (!User::where('email', $request->email)->update(['otp_code' => $otp])) {
            return $this->sendError('Unable to proccess. Please try again later');
        }
        Mail::to($request->email)->send(new VerifyEmail($otp));
        return $this->sendResponse([], 'Otp code sent to your email');
    }

    // Verification of OTP Code API 
    public function verifyOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp_code' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        if (!User::where([['email', '=', $request->email], ['otp_code', '=', $request->otp_code]])->exists()) {
            return $this->sendError('Invalid Code.');
        }
        return $this->sendResponse([], 'Otp matched, Change your password.');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:8',
            'email' => 'required|email|exists:users,email'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Password should not be less than 8 digits and must match.', $validator->errors());
        }

        if (!User::where('email', $request->email)->update(['otp_code' => Null, 'password' => bcrypt($request->password)])) {
            return $this->sendError('Unable to process. Please try again later.');
        }
        return $this->sendResponse([], 'Password updated successfully.');
    }
    ////////........logout....../////////
    public function logout(Request $request)
    {
        FacadesSession::flush();
        Auth::logout();
        return Redirect::to('/');
    }
    // ////// trainer sign up.......///////
    // public function trainerSignup(TrainerSignupRequest $request)
    // {
    //     $TrainerData = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'user_type' => 'trainer',
    //         'password' => bcrypt($request->password),
    //         'profile_img' => $request->image,
    //         'phone' => $request->contact_number,
    //         'date_of_birth' => $request->date_of_birth,
    //         'about' => $request->about,
    //         'emergency_contact' => $request->emergency_contact,
    //         'relationship_emergency_contact' => $request->relation_emergency,
    //         'gender' => $request->gender,
    //         'country' => $request->country,
    //         'state' => $request->state,
    //         'workout_location' => $request->location,
    //         'weight' => $request->weight,
    //         'height' => $request->height,
    //         'madical_condition' => $request->madical_condition,
    //     ];
    //     $registeredTrainer = User::create($TrainerData);
    //     if (!$registeredTrainer) {
    //         return $this->sendError('User has not registered. Please try again later');
    //     }


    //     $trainerData  = User::find($registeredTrainer->id);
    //     $tarner_profile = TrainerProfile::create([
    //         'user_id' => $trainerData->id,
    //     ]);

    //     $trainerData->token = $registeredTrainer->createToken('API Token')->accessToken;
    //     return $this->sendResponse($trainerData, 'Trainer Registered Successfully!');
    // }
    /// trainer detail.......///////
    // public function trainerDetail(TrainerDetailRequest $request)
    // {
    //     $class = Classes::create(
    //         [
    //             'category_id' => $request->category_id,
    //             'trainer_id' => $request->trainer_id,

    //         ]
    //     );

    //     if (!$class) {
    //         return $this->sendError('Trainer');
    //     }

    //     $session = $request->session;
    //     foreach ($session as $sessions) {
    //         $startMeridiem = date('a', strtotime($sessions['start_time']));
    //         $endMeridiem = date('a', strtotime($sessions['end_time']));
    //         $session_data = new Session();
    //         $session_data->trainer_id = $request->trainer_id;
    //         $session_data->category_id = $request->category_id;

    //         $session_data->day = $sessions['day'];
    //         $session_data->class_id = $class->id;
    //         $session_data->price = $sessions['price'];
    //         $session_data->difficulty_level = $sessions['difficulty_level'];
    //         $session_data->type = $sessions['type'];
    //         $session_data->start_time = $sessions['start_time'];
    //         $session_data->end_time = $sessions['end_time'];
    //         $session_data->start_meridiem = $startMeridiem;
    //         $session_data->end_meridiem = $endMeridiem;
    //         $session_data->save();
    //     }
    //     $class_image = $request->class_images;
    //     foreach ($class_image as  $class_images) {
    //         $images = new ClassImage();
    //         $images->image = $class_images['image'];
    //         $images->class_id = $class->id;
    //         $images->save();
    //     }
    //     return $this->sendResponse([], 'Trainer Detail insert Successfully!');
    // }
    public function trainerDetail(Request $request)
    {
        // $class = Classes::create(
        //     [
        //         'category_id' => $request->category_id,
        //         'trainer_id' => $request->trainer_id,
        //     ]
        // );

        // if (!$class) {
        //     return $this->sendError('Trainer');
        // }
        $sessions = $request->allSessions;
        foreach ($sessions as $session) {
            $class = Classes::create(
                [
                    'category_id' => $session['category_id'],
                    'trainer_id' => $session['trainer_id'],
                ]
            );
            $startMeridiem = date('a', strtotime($session['startTime']));
            $endMeridiem = date('a', strtotime($session['endTime']));
            $session_data = new Session();
            $session_data->trainer_id = $session['trainer_id'];
            $session_data->category_id = $session['category_id'];
            $session_data->sub_category = $session['subCategory'];
            $session_data->preference = $session['preference'];
            $session_data->price_unit = $session['priceUnit'];
            if ($session['preference'] == 0) {
                $session_data->day = $session['sessionDay'];
                $session_data->session_date = $session['sessionDate']; //new
            } else {
                $session_data->day = $session['day'];
            }
            $session_data->class_id = $class->id;
            $session_data->price = $session['price'];
            $session_data->difficulty_level = $session['difficulty'];
            $session_data->type = $session['type'];
            $session_data->start_time = $session['startTime'];
            $session_data->end_time = $session['endTime'];
            $session_data->start_meridiem = $startMeridiem;
            $session_data->end_meridiem = $endMeridiem;
            $session_data ->location_id = $session['location_id'];
            $session_data->save();

            foreach ($session['images'] as  $session_image) {
                $images = new SessionImage();
                $images->image = $session_image; 
                $images->session_id = $session_data->id;
                $images->save();
            }
        }

        return $this->sendResponse([], 'Trainer Detail insert Successfully!');
    }
}
