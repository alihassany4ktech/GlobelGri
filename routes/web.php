<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});






Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function () {
    Auth::routes(['register' => false]);


    /****************************** Admin ***************************/


    Route::get('/', 'AdminController@index')->name('home');

    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::get('/profile', 'AdminController@profile')->name('profile');

    Route::post('/profile/update', 'AdminController@update')->name('profile.update');



    /****************************** Agent ***************************/

    Route::get('/agents', 'Agent\AgentController@index')->name('agents');

    Route::get('agent/create', 'Agent\AgentController@agentForm')->name('addagent');

    Route::post('agent/store', 'Agent\AgentController@agentStore')->name('agent.store');

    Route::post('agent/destroy', 'Agent\AgentController@destroyAgent')->name('agent.destroy');

    Route::post('agent/delete/', 'Agent\AgentController@deleteAgent')->name('agent.delete');

    Route::get('agent/edit/{id}', 'Agent\AgentController@edit')->name('agent.edit');

    Route::post('agent/update', 'Agent\AgentController@agentUpdate')->name('agent.update');

    Route::post('agent/recover', 'Agent\AgentController@recoverAgent')->name('agent.recover');

    Route::get('trashed-agent', 'Agent\AgentController@trash')->name('trash');

    Route::post('agent/ban', 'Agent\AgentController@banAgent')->name('agent.ban');

    Route::post('agent/unban', 'Agent\AgentController@unbanAgent')->name('agent.unban');


    /****************************** Blog ***************************/

    Route::get('blog/create', 'Blog\BlogController@create')->name('create.blog');

    Route::post('blog/store', 'Blog\BlogController@store')->name('blog.store');


    /****************************** General Setting ***************************/

    Route::get('/setting', 'GeneralSetting\GeneralSettingController@create')->name('generalsetting');

    Route::post('/setting/store', 'GeneralSetting\GeneralSettingController@store')->name('generalsetting.store');
});


/****************************** agent ***************************/

Route::namespace('Agent')->as('agent.')->group(function () {


    Route::get('/agent/profile', 'AgentController@dashboard')->name('dashboard');

    Route::post('profile/update', 'AgentController@profileupdate')->name('profile.update');

    Route::post('password/update', 'AgentController@passwordupdate')->name('password.update');

    Route::post('social-media/update', 'AgentController@social_media_update')->name('social_media.update');

    Route::get('/agent/property', 'AgentController@property')->name('property');

    Route::get('/single/property/{id}', 'AgentController@SingleProperty')->name('single_property');

    Route::get('/edit/property/{id}', 'AgentController@EditProperty')->name('edit_property');

    Route::get('/delete/property/{id}', 'AgentController@DeleteProperty')->name('delete_property');

    Route::get('/agent/contacts', 'AgentController@contacts')->name('contact');

    Route::get('/favourite/propreties', 'AgentController@favouriteProperty')->name('favourite.property');
});



// user login 

Route::post('user/login', 'Agent\UserLoginController@UserLogin')->name('user.login');

// user Sign up

Route::post('user/signup', 'Agent\UserLoginController@UserSignUp')->name('user.register');


// Route::get('signin', 'Agent\UserLoginController@signin')->name('/');


/****************************** Socialite  ************************/

// google
Route::get('/login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');

Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback')->name('google.callback');

// // facebook
Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');

Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('facebook.callback');


/****************************** Property  ************************/

Route::namespace('Property')->as('property.')->group(function () {

    Route::get('property/create', 'PropertyController@create')->name('create');

    Route::post('property/store', 'PropertyController@store')->name('store');

    Route::post('property/update', 'PropertyController@update')->name('update');

    Route::post('property/search', 'PropertyController@SearchProperty')->name('searchs');
});


/****************************** Property Unit  ************************/

Route::namespace('Unit')->as('unit.')->group(function () {

    Route::get('unit/create', 'UnitController@create')->name('create');

    Route::post('unit/store', 'UnitController@store')->name('store');

    Route::post('unit/status/update', 'UnitController@StatusUpdate')->name('status.update');

    Route::post('unit/newstatus/update', 'UnitController@NewStatusUpdate')->name('newstatus.update');

    Route::get('unit/purchased', 'UnitController@unitPurchased')->name('purchased');
});

/****************************** Frontend ************************/

Route::get('/', 'Frontend\FrontEndController@index')->name('index');

// Home For Sale

Route::get('/home-for-sale', 'Frontend\FrontEndController@HomeForSale')->name('home_for_sale');

Route::get('/single-property/{id}', 'Frontend\FrontEndController@SingleProperty')->name('single_property');

// Home For Rent

Route::get('/home-for-rent', 'Frontend\FrontEndController@HomeForRent')->name('home_for_rent');

// Investment

Route::get('/home-for-investment', 'Frontend\FrontEndController@investment')->name('investment');


Route::get('/contact-us', 'Frontend\FrontEndController@ContactUs')->name('contact_us');

Route::get('/blog', 'Frontend\FrontEndController@blogs')->name('blog');

Route::get('/single-blog/{id}', 'Frontend\FrontEndController@SingleBlog')->name('single_blog');

Route::get('/about-us', 'Frontend\FrontEndController@AboutUs')->name('about_us');

Route::get('/term-of-use', 'Frontend\FrontEndController@TermOfUse')->name('term_of_use');

Route::get('/privacy-policy', 'Frontend\FrontEndController@PrivacyPolicy')->name('privacy_policy');

Route::get('/contact-support', 'Frontend\FrontEndController@ContactSupport')->name('contact_support');

Route::get('/how-it-work', 'Frontend\FrontEndController@HowItWork')->name('how_it_work');

// Contact 

Route::post('contact/store', 'Frontend\FrontEndController@ContactStore')->name('contact.store');

Route::post('contact/info/store', 'Frontend\FrontEndController@ContacInfotStore')->name('contact.info.store');


Route::post('result/buy', 'Frontend\FrontendController@searchBye')->name('BuySearch');

// Favourite Property

Route::post('favourite/property/store', 'Frontend\FrontEndController@favourite')->name('property.favourite.store');

// Buy A Home 

Route::get('/buy-home', 'Frontend\FrontEndController@BuyHome')->name('buy_a_home');

// Rent a home 

Route::get('/rent-home', 'Frontend\FrontEndController@RentHome')->name('rent_a_home');

// Invest A home

Route::get('/invest-home', 'Frontend\FrontEndController@InvestHome')->name('invest_a_home');

// All Guide

Route::get('/all-guide', 'Frontend\FrontEndController@AllGuide')->name('all_guide');

// Agent guide

Route::get('/agent-guid', 'Frontend\FrontEndController@AgentGuide')->name('agent_guide');

// Property Manager guide

Route::get('/property-manager-guid', 'Frontend\FrontEndController@PropertyManagerGuide')->name('property_manager_guide');

// Lender guide

Route::get('/lender-guid', 'Frontend\FrontEndController@LenderGuide')->name('lender_guide');

// Builder guide

Route::get('/builder-guid', 'Frontend\FrontEndController@BuilderGuide')->name('bulider_guide');

// Platform Administrator guide

Route::get('/platform-administrator-guid', 'Frontend\FrontEndController@PlateformAdministratorGuide')->name('plateform_administrator_guide');




Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
