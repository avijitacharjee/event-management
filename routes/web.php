<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('public.index');
});
Route::view('/sign-in', 'public.sign-in');
Route::post('/sign-in', [Controller::class, 'login']);
Route::view('/sign-up', 'public.sign-up');
Route::post('/sign-up', [Controller::class, 'signUp']);
Route::get('/sign-out', [Controller::class, 'logout']);


Route::view('/about-us','public.about-us');
Route::view('/help-center', 'public.help-center');
Route::view('/faq', 'public.faq');


Route::group([
    'prefix' => 'event',
    'controller' => EventController::class,
], function () {
    Route::get('create-new', 'createNew');
    Route::get('create-online', 'createOnline');
    Route::post('create-online', 'storeOnline');
    Route::get('create-offline', 'createOffline');
    Route::post('create-offline', 'storeOffline');
    Route::get('explore-events', 'exploreEvents');
    Route::get('event-single/{event}','show');
    Route::get('checkout','checkout');
});
Route::fallback(function () {
    return view('public.404');
});
