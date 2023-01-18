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
Route::any('/trainers', [UserController::class, 'getTrainerCategory'])->name('/trainers');
Route::any('/trainers/{id}', [UserController::class, 'getSpecificTrainer']);
Route::any('/update/profile', [UserController::class, 'updateProfile'])->name('update/profile');
Route::any('/payment_intent', [UserController::class, 'paymentIntent'])->name('payment_intent');
Route::post('/contact', [UserController::class, 'contactUs']);

Route::any('/dashboard', [UserController::class, 'dashbord'])->name('/dashboard');
Route::any('/dashboard/trainer-detail/{id}', [UserController::class, 'trainer_detail'])->name('/dashboard/trainer-detail');
Route::any('/dashboard/class-detail/{id}', [UserController::class, 'class_detail'])->name('/dashboard/class-detail');
Route::any('/dashboard/payment/{id}', [UserController::class, 'showCard'])->name('/dashboard/payment');



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


Route::get('/trainers/yoga', function () {
    return view('pages.website.specific-trainers-web');
});
Route::get('/payments', function () {
    return view('pages.website.payment');
});
Route::get('/profile', function () {
    return view('pages.website.update-profile');
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
Route::get('/dashboard/categories', function () {
    return view('pages.userdashboard.explore.categories');
});
// Route::get('/dashboard/class-detail', function () {
//     return view('pages.userdashboard.explore.class-detail');
// });
//workout session
Route::get('/userdashboard', function () {
    return view('pages.userdashboard.dashboard.user-dashboard');
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

Route::get('/userdashboard/sessionone', function () {
    return view('pages.userdashboard.dashboard.user-session-one');
});
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
