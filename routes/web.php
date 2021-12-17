<?php

use App\PurchasedSubscription;
use App\Subscription;
use Illuminate\Http\Request;
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


    /****************************** SubAdmin ***************************/

    Route::get('/subadmins', 'SubAdminController@all')->name('subadmins');

    Route::get('subadmin/create', 'SubAdminController@create')->name('add.subadmin');

    Route::post('subadmin/store', 'SubAdminController@Store')->name('subadmin.store');

    Route::post('subadmin/delete', 'SubAdminController@delete')->name('subadmin.delete');

    Route::get('subadmin/edit/{id}', 'SubAdminController@edit')->name('subadmin.edit');

    Route::post('subadmin/update', 'SubAdminController@update')->name('subadmin.update');




    /****************************** Agent ***************************/

    Route::get('/agents', 'Agent\AgentController@index')->name('agents');

    // single agent view 

    Route::get('single/agent/{id}', 'Agent\AgentController@singleAgent')->name('agent');

    // backend agents 

    Route::get('backend/agents', 'Agent\AgentController@backendIndex')->name('backend.agents');

    Route::get('agent/create', 'Agent\AgentController@agentForm')->name('addagent');

    // back end user 

    Route::get('backend/agent/create', 'Agent\AgentController@backendAgentForm')->name('backend.addagent');

    Route::post('agent/store', 'Agent\AgentController@agentStore')->name('agent.store');

    // backend agent srore 

    Route::post('backend/agent/store', 'Agent\AgentController@backendAgentStore')->name('backend.agent.store');

    Route::post('agent/destroy', 'Agent\AgentController@destroyAgent')->name('agent.destroy');

    Route::post('agent/delete/', 'Agent\AgentController@deleteAgent')->name('agent.delete');

    // backend aget delete 

    Route::post('backend/agent/delete/', 'Agent\AgentController@deleteBackEndAgent')->name('backend.agent.delete');

    Route::get('agent/edit/{id}', 'Agent\AgentController@edit')->name('agent.edit');

    // backend agent edit

    Route::get('backend/agent/edit/{id}', 'Agent\AgentController@BackendEdit')->name('backend.agent.edit');


    Route::post('agent/update', 'Agent\AgentController@agentUpdate')->name('agent.update');

    // backend agent update


    Route::post('backend/agent/update', 'Agent\AgentController@backendAgentUpdate')->name('backend.agent.update');

    Route::post('agent/recover', 'Agent\AgentController@recoverAgent')->name('agent.recover');

    Route::get('trashed-agent', 'Agent\AgentController@trash')->name('trash');

    Route::post('agent/ban', 'Agent\AgentController@banAgent')->name('agent.ban');

    Route::post('agent/unban', 'Agent\AgentController@unbanAgent')->name('agent.unban');

    // new 

    Route::get('agent/requests', 'Agent\AgentController@allRequest')->name('agent.request');

    // property edit for threesixty

    Route::get('property/edit/{id}', 'Agent\AgentController@propertyEdit')->name('property.edit');

    Route::post('property/update', 'Agent\AgentController@propertyUpdate')->name('property.update');



    /****************************** Blog ***************************/

    Route::get('blog/create', 'Blog\BlogController@create')->name('create.blog');

    Route::post('blog/store', 'Blog\BlogController@store')->name('blog.store');

    /****************************** subscription ***************************/

    Route::get('subscriptions', 'Subscription\SubscriptionController@allSubscription')->name('all.subscription');

    Route::get('active/subscriptions', 'Subscription\SubscriptionController@activeSubscription')->name('active.subscription');

    Route::get('subscription/create', 'Subscription\SubscriptionController@subscriptionCreate')->name('subscription.create');

    Route::post('subscription/store', 'Subscription\SubscriptionController@subscriptionStore')->name('subscription.store');

    Route::get('subscription/delete/{id}', 'Subscription\SubscriptionController@deleteSubscription')->name('subscription.delete');

    Route::get('subscription/edit/{id}', 'Subscription\SubscriptionController@editSubscription')->name('subscription.edit');


    Route::post('subscription/update', 'Subscription\SubscriptionController@subscriptionUpdate')->name('subscription.update');


    /****************************** Role And Permissions ***************************/
    // frontend role
    Route::get('roles', 'RolePermission\RolePermissionController@allRoles')->name('all.roles');

    Route::get('role/create', 'RolePermission\RolePermissionController@createRole')->name('role.create');

    Route::post('/role/store', 'RolePermission\RolePermissionController@storeRole')->name('role.store');

    Route::get('/role/edit/{id}', 'RolePermission\RolePermissionController@editRole')->name('role.edit');

    Route::post('/role/update', 'RolePermission\RolePermissionController@updateRole')->name('role.update');

    // delete role 
    Route::get('/role/delete/{id}', 'RolePermission\RolePermissionController@deleteRole')->name('role.delete');

    // backend role
    Route::get('backend/roles', 'RolePermission\RolePermissionController@allBackendRoles')->name('backend.roles');

    Route::get('backend/role/create', 'RolePermission\RolePermissionController@createBackEndRole')->name('backend.role.create');

    Route::post('backend/role/store', 'RolePermission\RolePermissionController@storeBackEndRole')->name('backend.role.store');

    Route::get('backend/role/delete/{id}', 'RolePermission\RolePermissionController@deleteBackEndRole')->name('backend.role.delete');

    Route::get('backend/role/edit/{id}', 'RolePermission\RolePermissionController@editBackEndRole')->name('backend.role.edit');

    Route::post('backend/role/update', 'RolePermission\RolePermissionController@updateBackEndRole')->name('backend.role.update');
    // end 

    // permissions 
    Route::get('permissions', 'RolePermission\RolePermissionController@allPermissions')->name('all.permissions');

    // Route::get('permission/create', 'RolePermission\RolePermissionController@createPermission')->name('permission.create');

    // Route::post('/permission/store', 'RolePermission\RolePermissionController@storePermission')->name('permission.store');

    // delete permission 
    // Route::get('permission/delete/{id}', 'RolePermission\RolePermissionController@deletePermission')->name('permission.delete');

    /****************************** General Setting ***************************/

    Route::get('/setting', 'GeneralSetting\GeneralSettingController@create')->name('generalsetting');

    Route::post('/setting/store', 'GeneralSetting\GeneralSettingController@store')->name('generalsetting.store');
});


/****************************** agent ***************************/

Route::namespace('Agent')->as('agent.')->group(function () {


    Route::get('/agent/profile', 'AgentController@dashboard')->name('dashboard');

    // agent purchase subscription route

    Route::get('/agent/subscription', 'AgentController@subscription')->name('subscriptions');

    // end

    Route::post('profile/update', 'AgentController@profileupdate')->name('profile.update');

    Route::post('password/update', 'AgentController@passwordupdate')->name('password.update');

    Route::post('social-media/update', 'AgentController@social_media_update')->name('social_media.update');

    Route::get('/agent/property', 'AgentController@property')->name('property');

    Route::get('/single/property/{id}', 'AgentController@SingleProperty')->name('single_property');

    Route::get('/edit/property/{id}', 'AgentController@EditProperty')->name('edit_property');

    Route::get('/delete/property/{id}', 'AgentController@DeleteProperty')->name('delete_property');

    Route::get('/agent/contacts', 'AgentController@contacts')->name('contact');

    Route::get('/favourite/propreties', 'AgentController@favouriteProperty')->name('favourite.property');

    // new 
    Route::get('/agent/subscriptions', 'AgentController@agentSubscription')->name('subscription');

    Route::get('/agent/purchased/subscriptions', 'AgentController@purchasedSubscription')->name('purchased.subscription');

    Route::post('threesixty/request/store', 'AgentController@storeRequest')->name('store.threesixty.request');

    Route::get('/subscription/purchase/{id}', function ($id) {
        $gateway = new Braintree\Gateway([
            'environment' => env('BTREE_ENVIRONMENT'),
            'merchantId' => env('BTREE_MERCHANT_ID'),
            'publicKey' => env('BTREE_PUBLIC_KEY'),
            'privateKey' => env('BTREE_PRIVATE_KEY')
        ]);

        $token = $gateway->ClientToken()->generate();
        $subscription = Subscription::find($id);
        return view('agent.subscription.pruchase', compact('subscription', 'token'));
    })->name('payment');

    /****************************** Property Manager ***************************/


    Route::get('/all/propertymanagers', 'AgentController@allPropertyManager')->name('all.propertyManager');

    Route::get('/create/propertymanager', 'AgentController@createPropertyManager')->name('add.propertyManager');

    Route::post('/store/propertymanager', 'AgentController@storePropertyManager')->name('store.propertyManager');

    Route::post('/delete/propertymanager', 'AgentController@deletePropertManager')->name('delete.propertyManager');

    Route::get('/edit/propertymanager/{id}', 'AgentController@editPropertyManager')->name('edit.propertyManager');

    Route::post('/update/propertymanager', 'AgentController@updatePropertyManager')->name('update.propertyManager');

    Route::get('/view/propertymanager/{id}', 'AgentController@viewPropertyManager')->name('view.propertyManager');
});





Route::post('/checkout', function (Request $request) {
    $gateway = new Braintree\Gateway([
        'environment' => env('BTREE_ENVIRONMENT'),
        'merchantId' => env('BTREE_MERCHANT_ID'),
        'publicKey' => env('BTREE_PUBLIC_KEY'),
        'privateKey' => env('BTREE_PRIVATE_KEY')
    ]);

    $amount = $request->amount;
    $nonce = $request->payment_method_nonce;

    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'customer' => [
            'firstName' => $request->agent_name,
            'email' => $request->agent_email,
        ],
        'options' => [
            'submitForSettlement' => true
        ]
    ]);

    if ($result->success) {
        $transaction = $result->transaction;
        $purchasedsubscription = PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->first();
        if ($purchasedsubscription == null) {
            $subscription = new PurchasedSubscription();
            $subscription->agent_id = Auth::user()->id;
            $subscription->subscription_id = $request->subscription_id;
            $subscription->title = $request->title;
            $subscription->price = $request->amount;
            $subscription->valid_property = $request->valid_property;
            $subscription->status = $request->status;
            $subscription->description = $request->description;
            $subscription->save();
        } else {
            $purchasedsubscription = PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->first();
            $purchasedsubscription->subscription_id = $request->subscription_id;
            $purchasedsubscription->title = $request->title;
            $purchasedsubscription->price = $request->amount;
            $purchasedsubscription->status = $request->status;
            $purchasedsubscription->description = $request->description;
            $purchasedsubscription->valid_property += $request->valid_property;
            $purchasedsubscription->update();
        }
        return redirect()->route('agent.dashboard')->with('message', 'Subscription Purchase Successfully');
    } else {
        $errorString = "";

        foreach ($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }
        return back()->withErrors($result->message);
    }
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

// new 

// pricing

Route::get('/pricing', 'Frontend\FrontEndController@pricing')->name('pricing');


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
