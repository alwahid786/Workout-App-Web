<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Trainer\AuthController as TrainerAuthController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\SocialController;
use App\Http\Controllers\User\MapController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Trainer\TrainerController;
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
    return view('pages.website.index');
});
Route::get('/home', function () {
    return view('pages.website.index');
});
/////////.........trainer......../////////////
Route::post('/trainer_signup', [TrainerAuthController::class, 'trainerSignup']);
Route::post('/trainer/login', [TrainerAuthController::class, 'trainerLogin'])->name('trainer/login');
Route::post('/trainer/forgotPassword', [TrainerAuthController::class, 'trainerSendOtp'])->name('trainer/forgotPassword');
Route::post('/trainer/sendOtp', [TrainerAuthController::class, 'verifyOtp'])->name('trainer/sendOtp');
Route::post('/trainer/newPassword', [TrainerAuthController::class, 'newPassword'])->name('trainer/newPassword');
/////////.............user........./////////
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

// Create Image Path for Certificates 
Route::post('/upload-image', [UserController::class, 'uploadImage'])->name('uploadImage');


Route::middleware('auth')->group(function () {
    /////////.............trainer...............//////////




    //////////////....user................////////////////


    Route::any('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::any('/latest/sessions', [UserController::class, 'getTrainerCategory'])->name('trainers');
    Route::any('/trainers/{id}', [UserController::class, 'getSpecificTrainer']);
    Route::any('/update/profile', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::any('/payment_intent', [UserController::class, 'paymentIntent'])->name('payment_intent');
    Route::any('/userdashboard/session', [UserController::class, 'getBookedSession'])->name('userdashboard/session');
    Route::any('/filter/session', [UserController::class, 'SearchResult'])->name('filter/session');
    Route::any('/dashboard/trainer', [UserController::class, 'usersTrainer'])->name('dashboard/trainer');
    Route::any('/userdashboard', [UserController::class, 'UserBookedSession'])->name('/userdashboard');

    Route::any('/dashboard', [UserController::class, 'dashbord'])->name('dashboard');
    // Route::post('categories/trainer/{id}', [UserController::class, 'category_trainer'])->name('categories/trainer');
    Route::any('/dashboard/categories/{id}', [UserController::class, 'categoryDetail'])->name('/dashboard/categories');
    Route::any('/userdashboard/sessionone/{id}', [UserController::class, 'viewSession'])->name('/userdashboard/sessionone');
    Route::any('/userdashboard/session/{id}', [UserController::class, 'sessionDetails'])->name('sessionDetails');

    Route::any('/dashboard/trainer-detail/{id}', [UserController::class, 'trainer_detail'])->name('/dashboard/trainer-detail');
    Route::any('/dashboard/trainer-sessions/{id}/{trainerId}', [UserController::class, 'trainerSessionDetail']);
    Route::any('/dashboard/class-detail/{id}/{day}', [UserController::class, 'class_detail'])->name('/dashboard/class-detail');
    Route::any('class_detail', [UserController::class, 'classDetails'])->name('classDetails');
    Route::any('/get_day_session', [UserController::class, 'getDaySession'])->name('get_day_session');
    Route::any('/dashboard/payment', [UserController::class, 'showCard'])->name('dashboard/payment');
    Route::any('/stripe/payment', [UserController::class, 'cardPayment'])->name('/stripe/payment');
    Route::any('/dashboard/map', [MapController::class, 'mapViewPage'])->name('mapViewPage');
    Route::any('/dashboard/filterMapData', [MapController::class, 'filterMapData'])->name('filterMapData');

    Route::any('get_sessions_list/{id}', [UserController::class, 'get_sessions_list'])->name('get_sessions_list');
    Route::any('/rating', [UserController::class, 'ratingStar'])->name('rating');
    Route::any('/payment', [UserController::class, 'userPaymentsList'])->name('userPaymentsList');
    Route::any('/userdashboard/pastsession', [UserController::class, 'allPastSession'])->name('userdashboard/pastsession');
    Route::any('/userdashboard/upcomingsessionlist', [UserController::class, 'upcomingSession'])->name('userdashboard/upcomingsessionlist');
    Route::any('/search/trainers', [UserController::class, 'trainerSearch'])->name('search/trainers');

    ///// trainer............//////
    Route::any('/update_profile_two', [TrainerAuthController::class, 'updateProfileStwo'])->name('update_profile_two');
    Route::any('/trainer/stepfive', [TrainerController::class, 'showTrainerDetail'])->name('trainer/stepfive');
    Route::any('/trainer/update_profile/', [TrainerController::class, 'updateTrainer'])->name('trainer/update_profile');
    Route::any('/trainer/updateprofile/', [TrainerController::class, 'showupdate'])->name('trainer/updateprofile');
    Route::any('/trainer/update_session/', [TrainerController::class, 'updateSession'])->name('trainer/update_session');
    Route::any('/trainer/delete_session/', [TrainerController::class, 'deleteSession'])->name('trainer/delete_session');


    Route::get('/trainer/steptwo', function () {
        return view('pages.trainerSide.account-step-two');
    });
    Route::post('render/sessionSlot', [SessionController::class, 'renderSessions'])->name('session.render');
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
// Route::get('/dashboard', function () {
//     return view('pages.userdashboard.explore.dashboard');
// });
// Route::get('/dashboard/map', function () {
//     return view('pages.userdashboard.explore.map-view');
// });

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
// Route::get('/dashboard/trainer', function () {
//     return view('pages.userdashboard.dashboard.all-trainer');
// });
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
// Route::get('/userdashboard', function () {
//     return view('pages.userdashboard.dashboard.user-dashboard');
// });
// Route::get('/userdashboard-copy', function () {
//     return view('pages.userdashboard.dashboard.user-dashboard-copy');
// });
// Route::get('/userdashboard/session', function () {
//     return view('pages.userdashboard.dashboard.user-session');
// });

// Route::get('/userdashboard/pastsession', function () {
//     return view('pages.userdashboard.dashboard.user-past-session');
// });
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
// Route::get('/userdashboard/upcomingsessionlist', function () {
//     return view('pages.userdashboard.dashboard.upcoming-session-list');
// });
Route::get('/userdashboard/dashboard-null', function () {
    return view('pages.userdashboard.dashboard.dashboard-null');
});
// payment
// Route::get('/payment', function () {
//     return view('pages.userdashboard.payment.payment');
// });
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
// Route::get('/trainer/otp', function () {
//     return view('pages.trainerSide.auth.otp');
// });
// Route::get('/trainer/newpassword', function () {
//     return view('pages.trainerSide.auth.newpassword');
// });



//Setup New Trainer Profile

Route::get('/trainer/stepone', function () {
    return view('pages.trainerSide.account-step-one');
});

// Route::get('/trainer/steptwo', function () {
//     return view('pages.trainerSide.account-step-two');
// });

Route::get('/trainer/stepthree', function () {
    return view('pages.trainerSide.account-step-three');
});
Route::get('/trainer/stepfour', function () {
    return view('pages.trainerSide.account-stepfour');
});
Route::get('/trainer/stepfours', function () {
    return view('pages.trainerSide.account-stepfour-second');
});
// Route::get('/trainer/stepfive', function () {
//     return view('pages.trainerSide.account-step-five');
// });
Route::get('/trainer/stepfour-second', function () {
    return view('pages.trainerSide.account-step-four-second');
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
Route::get('/trainer/chat', function () {
    return view('pages.trainerSide.message');
});
Route::get('/trainer/payment', function () {
    return view('pages.trainerSide.payment');
});
Route::get('/trainer/paymentdetail', function () {
    return view('pages.trainerSide.payment-detail');
});
// Route::get('/trainer/updateprofile', function () {
//     return view('pages.trainerSide.update-profile');
// });

Route::get('/trainer/profile', function () {
    return view('pages.trainerSide.profile');
});
