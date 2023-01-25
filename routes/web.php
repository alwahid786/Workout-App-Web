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
//workout session
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
Route::get('/trainer/forgetpassword', function () {
    return view('pages.trainerSide.auth.forgetpassword');
});
Route::get('/trainer/otp', function () {
    return view('pages.trainerSide.auth.otp');
});
Route::get('/trainer/newpassword', function () {
    return view('pages.trainerSide.auth.newpassword');
});
