<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizationController;
use App\Http\Middleware\OrganizationMiddleware;
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


Route::group([
    'controller' => AuthController::class
], function () {
    Route::get('/', 'index');
    Route::view('/sign-in', 'public.sign-in');
    Route::post('/sign-in',  'login');
    Route::view('/sign-up', 'public.sign-up');
    Route::post('/sign-up','signUp');
    Route::get('/sign-out', 'logout');
    Route::get('profile',  'profile');
});


Route::view('about-us', 'public.about-us');
Route::view('help-center', 'public.help-center');
Route::view('faq', 'public.faq');
Route::view('contact-us', 'public.contact-us');
Route::view('privacy-policy', 'public.privacy-policy');
Route::view('terms-and-conditions', 'public.terms-and-conditions');


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
    Route::get('event-single/{event}', 'show');
    Route::get('checkout', 'checkout');
});
Route::group([
    'prefix' => 'blog',
    'controller' => BlogController::class
], function () {
    Route::get('', 'index');
    Route::get('/{blog}', 'show');
});
Route::group(
    [
        'prefix' => 'organization',
        'controller' => OrganizationController::class,
        'middleware' => OrganizationMiddleware::class
    ],
    function () {
        Route::get('dashboard', 'dashboard');
        Route::get('events', 'events');
        Route::get('payouts', 'payouts');
        Route::get('profile', 'profile');

        Route::get('blogs', 'blogs');
        Route::post('blogs', 'storeBlog');
        Route::get('blog/delete/{blog}', 'deleteBlog');
        Route::post('blogs/update/{blog}', 'updateBlog');
        Route::get('blogs/duplicate/{blog}', 'duplicateBlog');
    }
);
Route::group([
    'prefix' => 'admin',
    'controller' => AdminController::class
], function () {
    Route::get('dashboard', 'dashboard');
});

Route::fallback(function () {
    return view('public.404');
});
