<?php

use App\Subscription;
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

Route::post('/login', 'Api\UserController@login');
Route::post('/register', 'Api\UserController@register');
// Forgot Password Route
Route::post('/forgot/password', 'Api\UserController@forgot_password');
// Otp Verify Route for  Forgot Password
Route::post('otp/verify', 'Api\UserController@opt_verify');
Route::post('/reset/password', 'Api\UserController@reset_password');




// Route::post('/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
// Route::post('/password/reset', 'Api\ResetPasswordController@reset');

// Route::get('/email/resend', 'Api\VerificationController@resend');
// Route::get('/email/verify/{id}/{hash}', 'Api\VerificationController@verify');

// google
// Route::get('/login/google', 'Api\UserController@redirectToGoogle');
// Route::get('/login/google/callback', 'Api\UserController@handleGoogleCallback');

// // facebook
// Route::get('/login/facebook', 'Api\UserController@redirectToFacebook');
// Route::get('/login/facebook/callback', 'Api\UserController@handleFacebookCallback');


// Contact 

// Route::post('/contact/store', 'Api\FrontendController@ContactStore');

Route::post('/contact/info/store', 'Api\FrontendController@ContacInfotStore');

// blog

Route::get('/blogs', 'Api\FrontendController@blogs');

Route::get('/single-blog/{id}', 'Api\FrontendController@SingleBlog');

// Properties  for rent
Route::get('/properties-for-rent', 'Api\FrontendController@propertiesForRent');
// Properties  for sale
Route::get('/properties-for-sale', 'Api\FrontendController@propertiesForSale');

// single property 
Route::get('/property/{id}', 'Api\FrontendController@singleProperty');

// get all  properties against  agent 
Route::get('/agent/all/properties/{id}', 'Api\FrontendController@agentAllProperty');

// search property 

Route::post('/search/property', 'Api\FrontendController@searchProperty');

// get all subscription

Route::get('/subscriptions', 'Api\FrontendController@allSubscription');

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/details', 'Api\UserController@details');

    Route::post('/profile/update', 'Api\UserController@profileupdate');

    Route::post('password/update', 'Api\UserController@passwordupdate');

    Route::post('social-media/update', 'Api\UserController@social_media_update');

    // favorite  property 
    Route::get('/favorite/properties', 'Api\PropertyController@favoriteProperties');
    // single favorite property 
    Route::get('/favorite-property/{id}', 'Api\PropertyController@singleFavoriteProperty');
    // property

    Route::post('/property/store', 'Api\PropertyController@store');

    Route::get('/agent/property', 'Api\PropertyController@property');

    Route::get('/single/property/{id}', 'Api\PropertyController@SingleProperty');


    // subscription route

    // get all subscription

    Route::get('/all/subscriptions', 'Api\SubscriptionController@allSubscription');

    // get single subscription

    Route::get('/single/subscription/{id}', 'Api\SubscriptionController@singleSubscription');

    // Get current Purchased Subscription  Route

    Route::get('/current/purchased/subscription', 'Api\SubscriptionController@CurrentPruchasedSubscription');

    // purchase subscription 

    // Route::get('/subscription/purchase', 'Api\SubscriptionController@checkoutForm');
});
