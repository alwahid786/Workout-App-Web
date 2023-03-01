<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\TrainerDetailRequest;
use App\Http\Requests\TrainerSignupRequest;
use App\Http\Requests\VerifyEmailRequest;
use App\Models\TrainerProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Mail\VerifyEmail;
use App\Models\Classes;
use App\Models\ClassImage;
use App\Models\Session;
use App\Models\Category;
use App\Models\SessionImage;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Exception;


class AuthController extends Controller
{
    use ResponseTrait;

    ////// trainer sign up.......///////
    public function trainerSignup(Request $request)
    {
        if ($request->has('profile_img')) {
            try {
                $file = $request->file('profile_img');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path('/files'), $name);
                $fileNames = $name;
            } catch (Exception $e) {
                $message = $e->getMessage();
                return $this->failure($message);
            }
            $image = url('public/files') . '/' . $fileNames;
        }
        $data = request()->except(['_token']);
        if ($request->has('profile_img')) {
            $data['profile_img'] = $image;
        }
        // $TrainerData = [
        //     'name' => $request->first_name . ' ' . $request->last_name,
        //     'email' => $request->email,
        //     'user_type' => 'trainer',
        //     'password' => bcrypt($request->password),
        //     'password_confirmation' => $request->confirm_password,
        //     // 'profile_img' => $request->image,
        //     'phone' => $request->contact_number,
        //     'about' => $request->about,

        // ];
        $registeredTrainer = User::create($data);
        $page = TrainerProfile::where('trainer_id', $registeredTrainer->id)->update(['page' => 1]);

        if (!$registeredTrainer) {
            return $this->sendError('Unexpected error occured while registration. Please try again later');
        }
        $trainerData  = User::find($registeredTrainer->id);
        Auth::loginUsingId($trainerData['id']);
        TrainerProfile::create([
            'user_id' => $trainerData->id,
        ]);
        $trainerData->token = $trainerData->createToken('API Token')->accessToken;
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
            'linkedin_url' => $request->linkedin,
            'page' => 2,
        ]);
        if (!$trainer) {
            return $this->sendError('User has not registered. Please try again later');
        }
        return Redirect::to(url('/trainer/stepthree'));
    }
    //.........show step three ...//////////
    public function stepThree()
    {
        
        $category = Category::all();
        if (!$category) {
            return $this->sendError('No Data found against ID');
        }
        $categories = json_decode($category, true);
        return view('pages.trainerSide.account-step-three', compact('categories'));
    }
    ///////...........create session.......////
    public function trainerDetail(Request $request)
    {
        $class = Classes::create(
            [
                'category_id' => $request->category_id,
                'trainer_id' => $request->trainer_id,

            ]
        );

        if (!$class) {
            return $this->sendError('Trainer');
        }

        $session = $request->session;
        foreach ($session as $sessions) {
            $startMeridiem = date('a', strtotime($sessions['start_time']));
            $endMeridiem = date('a', strtotime($sessions['end_time']));
            $session_data = new Session();
            $session_data->trainer_id = $request->trainer_id;
            $session_data->category_id = $request->category_id;

            $session_data->sub_category = $sessions['sub_category'];
            $session_data->limit = $sessions['limit'];
            $session_data->preference = $sessions['preference'];
            $session_data->price_unit = $sessions['price_unit'];

            $session_data->day = $sessions['day'];
            $session_data->class_id = $class->id;
            $session_data->price = $sessions['price'];
            $session_data->difficulty_level = $sessions['difficulty_level'];
            $session_data->type = $sessions['type'];
            $session_data->start_time = $sessions['start_time'];
            $session_data->end_time = $sessions['end_time'];
            $session_data->start_meridiem = $startMeridiem;
            $session_data->end_meridiem = $endMeridiem;
            $session[] = $session_data->save();

            $session_image = $request->session_images;
            foreach ($session_image as  $session_images) {
                $images = new SessionImage();
                $images->image = $session_images['image'];
                $images->session_id = $session->id;
                $images->save();
            }
        }
        $class_image = $request->class_images;
        foreach ($class_image as  $class_images) {
            $images = new ClassImage();
            $images->image = $class_images['image'];
            $images->class_id = $class->id;
            $images->save();
        }
        TrainerProfile::where('trainer_id', auth()->user()->id)->update([
            'page' => 3,
        ]);
        return $this->sendResponse([], 'Trainer Detail insert Successfully!');
    }
    ////////........trainer login........////////
    public function trainerLogin(LoginRequest $request)
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
        $page = TrainerProfile::where('user_id', auth()->user()->id)->first();
        if ($page['page'] == 1) {
            return Redirect::to(url('/trainer/steptwo'));
        }
        if ($page['page'] == 2) {
            return Redirect::to(url('/trainer/stepthree'));
        }
        if ($page['page'] == 3) {
            return Redirect::to(url('/trainer/stepfive'));
        }
        if ($page['page'] == 5) {

            return Redirect::to(url('/trainer/dashboard'));
        }
    }
    ///////////...forget password..........///////

    public function trainerSendOtp(VerifyEmailRequest $request)
    {
        $email = $request->email;
        $otp = rand(100000, 999999);
        if (!User::where('email', $request->email)->update(['otp_code' => $otp])) {
            return $this->sendError('Unable to proccess. Please try again later');
        }
        Mail::to($request->email)->send(new VerifyEmail($otp));

        // return Redirect::to(url('/trainer/otp'));
        return view('pages.trainerSide.auth.otp', compact('email'));
    }

    ///////........verify otp...........//////////
    public function verifyOtp(Request $request)
    {
        $email = $request->email;
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
        return view('pages.trainerSide.auth.newpassword', compact('email'));
    }

    public function newPassword(Request $request)
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
        return Redirect::to(url('/trainer/login'));
    }
}
