<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\SocialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('pages.index');
    return view('pages.website.index');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/verify/mail', [AuthController::class, 'verifyEmail'])->name('verifyEmail');
Route::post('/verify/otp', [AuthController::class, 'verifyOTP'])->name('verifyOTP');
Route::post('/update/password', [AuthController::class, 'updatePassword'])->name('updatePassword');
// Google Social Signup/login Routes 
Route::get('google', [SocialController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('google/callback', [SocialController::class, 'handleGoogleCallback']);
// Facebook Social Signup/login Routes 
Route::get('facebook', [SocialController::class, 'redirectToFacebook'])->name('redirectToFacebook');
Route::get('facebook/callback', [SocialController::class, 'handleFacebookCallback']);
// Instagram Social Signup/login Routes 
Route::get('instagram', [SocialController::class, 'redirectToInstagram'])->name('redirectToInstagram');
Route::get('instagram/callback', [SocialController::class, 'handleInstagramCallback']);
Route::post('/contact', [UserController::class, 'contactUs']);

Route::middleware('auth')->group(function () {
    Route::any('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::any('/trainers', [UserController::class, 'getTrainerCategory'])->name('/trainers');
    Route::any('/trainers/{id}', [UserController::class, 'getSpecificTrainer']);
    Route::any('/update/profile', [UserController::class, 'updateProfile'])->name('update/profile');
    Route::any('/payment_intent', [UserController::class, 'paymentIntent'])->name('payment_intent');
    Route::any('/userdashboard/session', [UserController::class, 'getBookedSession'])->name('/userdashboard/session');
    Route::any('/userdashboard', [UserController::class, 'UserBookedSession'])->name('/userdashboard');

    Route::any('/dashboard', [UserController::class, 'dashbord'])->name('/dashboard');
    // Route::post('categories/trainer/{id}', [UserController::class, 'category_trainer'])->name('categories/trainer');
    Route::any('/dashboard/categories/{id}', [UserController::class, 'categoryDetail'])->name('/dashboard/categories');
    Route::any('/userdashboard/sessionone/{id}', [UserController::class, 'viewSession'])->name('/userdashboard/sessionone');

    Route::any('/dashboard/trainer-detail/{id}', [UserController::class, 'trainer_detail'])->name('/dashboard/trainer-detail');
    Route::any('/dashboard/class-detail/{id}', [UserController::class, 'class_detail'])->name('/dashboard/class-detail');
    Route::any('class_detail', [UserController::class, 'classDetails'])->name('classDetails');
    Route::any('/get_day_session', [UserController::class, 'getDaySession'])->name('get_day_session');
    Route::any('/dashboard/payment', [UserController::class, 'showCard'])->name('/dashboard/payment');
    Route::any('/stripe/payment', [UserController::class, 'cardPayment'])->name('/stripe/payment');

    Route::any('get_sessions_list/{id}', [UserController::class, 'get_sessions_list'])->name('get_sessions_list');
});




Route::get('/trainers/yoga', function () {
    return view('pages.website.specific-trainers-web');
});
Route::get('/payments', function () {
    return view('pages.website.payment');
});
Route::get('/profile', function () {
    return view('pages.website.update-profile');
});
Route::get('/about', function () {
    return view('pages.website.about');
});
Route::get('/services', function () {
    return view('pages.website.services');
});
Route::get('/approach', function () {
    return view('pages.website.our-approach');
});
Route::get('/term', function () {
    return view('pages.website.terms');
});
Route::get('/about-l', function () {
    return view('pages.website.about-l');
});
Route::get('/services-l', function () {
    return view('pages.website.services-l');
});
Route::get('/approach-l', function () {
    return view('pages.website.our-approach-l');
});
Route::get('/term-l', function () {
    return view('pages.website.terms-l');
});
//  user dashboard
// Route::get('/dashboard', function () {
//     return view('pages.userdashboard.explore.dashboard');
// });
Route::get('/dashboard/map', function () {
    return view('pages.userdashboard.explore.map-view');
});

// Route::get('/dashboard/payment', function () {
//     return view('pages.userdashboard.explore.payment');
// });
// Route::get('/dashboard/trainer-detail', function () {
//     return view('pages.userdashboard.explore.trainer-detail');
// });
// Route::get('/dashboard/categories', function () {
//     return view('pages.userdashboard.explore.categories');
// });
// Route::get('/dashboard/class-detail', function () {
//     return view('pages.userdashboard.explore.class-detail');
// });
Route::get('/dashboard/trainer', function () {
    return view('pages.userdashboard.dashboard.all-trainer');
});
Route::get('/dashboard/mapgroup', function () {
    return view('pages.userdashboard.explore.map-view-group');
});
Route::get('/dashboard/payment', function () {
    return view('pages.userdashboard.explore.payment');
});
Route::get('/dashboard/trainer-detail', function () {
    return view('pages.userdashboard.explore.trainer-detail');
});
// Route::get('/dashboard/categories', function () {
//     return view('pages.userdashboard.explore.categories');
// });
Route::get('/dashboard/class-detail', function () {
    return view('pages.userdashboard.explore.class-detail');
});
Route::get('/dashboard/class-detail-copy', function () {
    return view('pages.userdashboard.explore.class-detail-copy');
});
Route::get('/dashboard/class-detail-one', function () {
    return view('pages.userdashboard.explore.class-detail-one');
});
//workout session
// Route::get('/userdashboard', function () {
//     return view('pages.userdashboard.dashboard.user-dashboard');
// });
// Route::get('/userdashboard/session', function () {
//     return view('pages.userdashboard.dashboard.user-session');
// });
//workout 
Route::get('/userdashboard', function () {
    return view('pages.userdashboard.dashboard.user-dashboard');
});
Route::get('/userdashboard-copy', function () {
    return view('pages.userdashboard.dashboard.user-dashboard-copy');
});
Route::get('/userdashboard/session', function () {
    return view('pages.userdashboard.dashboard.user-session');
});

Route::get('/userdashboard/pastsession', function () {
    return view('pages.userdashboard.dashboard.user-past-session');
});
Route::get('/userdashboard/pastsessiondetail', function () {
    return view('pages.userdashboard.dashboard.user-past-session-detail');
});

// Route::get('/userdashboard/sessionone', function () {
//     return view('pages.userdashboard.dashboard.user-session-one');
// });
Route::get('/userdashboard/sessiongroup', function () {
    return view('pages.userdashboard.dashboard.user-session-group');
});
Route::get('/userdashboard/upcomingsessionone', function () {
    return view('pages.userdashboard.dashboard.user-upcoming-session-one');
});
Route::get('/userdashboard/upcomingsessiongroup', function () {
    return view('pages.userdashboard.dashboard.user-upcoming-session-group');
});
// payment
Route::get('/payment', function () {
    return view('pages.userdashboard.payment.payment');
});
Route::get('/payment/paymentdetail', function () {
    return view('pages.userdashboard.payment.payment-detail');
});
//chat
Route::get('/chat', function () {
    return view('pages.userdashboard.chat.chat');
});


// trainerside

//Login
Route::get('/trainer/login', function () {
    return view('pages.trainerSide.auth.login');
});
Route::get('/trainer/logins', function () {
    return view('pages.trainerSide.auth.logins');
});
Route::get('/trainer/forgetpassword', function () {
    return view('pages.trainerSide.auth.forgetpassword');
});
Route::get('/trainer/otp', function () {
    return view('pages.trainerSide.auth.otp');
});
Route::get('/trainer/newpassword', function () {
    return view('pages.trainerSide.auth.newpassword');
});



//Setup New Trainer Profile

Route::get('/trainer/stepone', function () {
    return view('pages.trainerSide.account-step-one');
});

Route::get('/trainer/steptwo', function () {
    return view('pages.trainerSide.account-step-two');
});

Route::get('/trainer/stepthree', function () {
    return view('pages.trainerSide.account-step-three');
});
