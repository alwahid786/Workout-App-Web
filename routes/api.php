<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/trainer_register', [AuthController::class, 'trainerSignup']);
Route::post('/trainer_detail', [AuthController::class, 'trainerDetail']);
Route::post('/add_category', [AdminController::class, 'addCategory']);
