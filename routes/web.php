<?php

use App\Http\Controllers\ContactController;
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
    return view('pages.index');
});

Route::post('contact-us', [ContactController::class, 'contactUs'])->name('contactUs');

Route::get('/home', function () {
    return view('pages.website.index');
});
Route::get('/trainers', function () {
    return view('pages.website.all-trainers-web');
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
    return view('pages.website.about-new');
});
Route::get('/faq', function () {
    return view('pages.website.faq');
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
Route::get('/dashboard', function () {
    return view('pages.userdashboard.explore.dashboard');
});
Route::get('/dashboard/map', function () {
    return view('pages.userdashboard.explore.map-view');
});
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
Route::get('/dashboard/categories', function () {
    return view('pages.userdashboard.explore.categories');
});
Route::get('/dashboard/class-detail', function () {
    return view('pages.userdashboard.explore.class-detail');
});
Route::get('/dashboard/class-detail-copy', function () {
    return view('pages.userdashboard.explore.class-detail-copy');
});
Route::get('/dashboard/class-detail-one', function () {
    return view('pages.userdashboard.explore.class-detail-one');
});
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
Route::get('/userdashboard/upcomingsessionlist', function () {
    return view('pages.userdashboard.dashboard.upcoming-session-list');
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
Route::get('/trainer/stepfour', function () {
    return view('pages.trainerSide.account-stepfour');
});
Route::get('/trainer/stepfours', function () {
    return view('pages.trainerSide.account-stepfour-second');
});
Route::get('/trainer/stepfive', function () {
    return view('pages.trainerSide.account-step-five');
});
// trainer
Route::get('/trainer/dashboard', function () {
    return view('pages.trainerSide.dashboard');
});
Route::get('/trainer/calendar', function () {
    return view('pages.trainerSide.calendar');
});
Route::get('/trainer/clientlist', function () {
    return view('pages.trainerSide.client-list');
});
Route::get('/trainer/session', function () {
    return view('pages.trainerSide.session');
});
Route::get('/trainer/sessiongroup', function () {
    return view('pages.trainerSide.session-group');
});
Route::get('/trainer/sessionone', function () {
    return view('pages.trainerSide.session-one');
});
Route::get('/trainer/request', function () {
    return view('pages.trainerSide.client-request');
});
Route::get('/trainer/payment', function () {
    return view('pages.trainerSide.payment');
});
