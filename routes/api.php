<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Middleware\ApiMiddleware;
use App\Http\Middleware\Authenticate;
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
], function () {
    Route::post('/sign-in',  'login');
    Route::post('/sign-up', 'signUp');
    Route::get('/sign-out', 'logout');
    Route::get('profile',  'profile');
});
Route::group([], function () {
    Route::resource('event', EventController::class);
});
Route::group([
    'controller' => TicketController::class
], function () {
    Route::get('event-ticket/{event}', 'getTicketByEventId');
});
Route::group([
    'controller' => EventController::class
], function () {
    Route::get('booking-info/{id}', 'getInfoByBookingId');
    Route::get('/booking-status/{booking}/{status}','changeBookingStatus');
    Route::get('/coupon/{coupon}/{status}','changeCouponStatus');
});
