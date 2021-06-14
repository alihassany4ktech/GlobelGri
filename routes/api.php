<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/verified-only', function (Request $request) {

    dd('your are verified', $request->user()->name);
})->middleware('auth:api', 'verified');

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');

Route::post('password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Api\ResetPasswordController@reset');

Route::get('/email/resend', 'Api\VerificationController@resend');
Route::get('/email/verify/{id}/{hash}', 'Api\VerificationController@verify');

// google
Route::get('/login/google', 'Api\UserController@redirectToGoogle');

Route::get('/login/google/callback', 'Api\UserController@handleGoogleCallback');

// // facebook
Route::get('/login/facebook', 'Api\UserController@redirectToFacebook');

Route::get('/login/facebook/callback', 'Api\UserController@handleFacebookCallback');


// Contact 

Route::post('contact/store', 'Api\FrontendController@ContactStore');

Route::post('contact/info/store', 'Api\FrontendController@ContacInfotStore');

// blog

Route::get('/blog', 'Api\FrontendController@blogs');

Route::get('/single-blog/{id}', 'Api\FrontendController@SingleBlog');

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('details', 'Api\UserController@details');

    Route::post('/profile/update', 'Api\UserController@profileupdate');

    Route::post('password/update', 'Api\UserController@passwordupdate');

    Route::post('social-media/update', 'Api\UserController@social_media_update');

    // property

    Route::post('/property/store', 'Api\PropertyController@store');

    Route::get('/agent/property', 'Api\PropertyController@property');

    Route::get('/single/property/{id}', 'Api\PropertyController@SingleProperty');
});
