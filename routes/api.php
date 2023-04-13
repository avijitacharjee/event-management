<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'controller' => AuthController::class,
    'middleware'=>[ForceJsonResponse::class],
], function () {
    Route::post('/sign-in',  'login');
    Route::post('/sign-up','signUp');
    Route::get('/sign-out', 'logout');
    Route::get('profile',  'profile');
});
