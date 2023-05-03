<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    // Google Social 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::with('google')->user();
        $finduser = User::where('email', $user->email)->first();
        if ($finduser == true) {
            // update socialite user
            Auth::login($finduser);
            if ($finduser->update_status = 0) {
                return redirect('/profile');
            }
            return redirect('/dashboard');
        } else {
            $createNewUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('123456dummy'),
                'user_type' => 'user',
                'google_id' => $user->id
            ]);
            Auth::login($createNewUser);
            return redirect('/profile');
        }
    }

    // Facebook Social 
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::with('facebook')->user();
        $finduser = User::where('email', $user->email)->first();
        if ($finduser == true) {
            // update socialite user
            Auth::login($finduser);
            if ($finduser->update_status = 0) {
                return redirect('/profile');
            }
            return redirect('/dashboard');
        } else {
            $createNewUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('123456dummy'),
                'user_type' => 'user',
                'facebook_id' => $user->id
            ]);
            Auth::login($createNewUser);
            return redirect()->route('trainers');
        }
    }

    // Instagram Social
    public function redirectToInstagram()
    {
        return Socialite::driver('instagram')->redirect();
    }
    public function handleInstagramCallback()
    {
        $user = Socialite::driver('instagram')->user();
        dd($user);
        $finduser = User::where('email', $user->email)->first();
        if ($finduser == true) {
            // update socialite user
            Auth::login($finduser);
            return redirect()->route('trainers');
        } else {
            $createNewUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('123456dummy'),
                'user_type' => 'user',
                'instagram_id' => $user->id
            ]);
            Auth::login($createNewUser);
            return redirect()->route('trainers');
        }
    }
}
