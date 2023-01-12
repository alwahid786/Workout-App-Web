<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\VerifyEmailRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

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
    public function sendOtp(VerifyEmailRequest $request)
    {
        $otp = rand(100000, 999999);
        if (!User::where('email', $request->email)->update(['otp_code' => $otp])) {
            return $this->sendError('Unable to proccess. Please try again later');
        }
        Mail::to($request->email)->send(new VerifyEmail($otp));
        return $this->sendResponse([], 'Otp code sent to your email');
    }
}
