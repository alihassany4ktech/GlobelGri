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
    Auth::routes(['register' => true]);


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

    // property 


});

Route::namespace('Property')->as('property.')->group(function () {

    Route::get('property/create', 'PropertyController@create')->name('create');

    Route::post('property/store', 'PropertyController@store')->name('store');
});

/****************************** Frontend ************************/

Route::get('/', 'Frontend\FrontEndController@index')->name('index');

Route::get('/home-for-sale', 'Frontend\FrontEndController@HomeForSale')->name('home_for_sale');

Route::get('/single-property', 'Frontend\FrontEndController@SingleProperty')->name('single_property');

Route::get('/contact-us', 'Frontend\FrontEndController@ContactUs')->name('contact_us');

Route::get('/blog', 'Frontend\FrontEndController@blog')->name('blog');

Route::get('/single-blog', 'Frontend\FrontEndController@SingleBlog')->name('single_blog');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
