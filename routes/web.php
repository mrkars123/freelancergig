<?php

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
Route::get('/ip_detials', function () {
    return view('ip_details');
});
Auth::routes(['verify' => true]);

Route::get('/home', function () {
    return view('home');
});

Route::delete('/delete/{id}', 'NewsController@deleteUser');
//Route::get('/profiles/{user}', 'AuthController@show')->name('profiles.show');
Route::match(['get','post'], '/check-email','Auth\RegisterController@check_email');

Route::match(['get','post'], '/check-username','Auth\RegisterController@check_username');
//Route::post('/check','Auth\LoginController@check')->name('login.check');
Route::post('/user_login', 'Auth\LoginController@user_login');

Route::get('/redirect/{service}', 'SocialController@redirect');

Route::get('/callback/{service}', 'SocialController@callback');


/*
	Route::middleware(['active_user'])->group(function () {
	    Route::post('/user_login', 'Auth\LoginController@user_login');
	});
*/

//Route::get('profile/{user}','AuthController@profile')->name('author.profile');

Route::post('/add','AuthController@check')->name('add');

Route::resource('profiles', ProfileController::class);


Route::get('/', 'DashboardController@index');


Route::get('/registers', 'AuthController@register');

Route::post('/save_register', 'AuthController@save_register')->name('save_user');

//Route::get('check_email_page', 'AuthController@checkEmailPage')->name('check_email_page');
Route::post('forgot_password', 'AuthController@forgotPassword')->name('user.forgot.password');
Route::get('reset_password', 'AuthController@showResetPasswordPage')->name('reset.password');
Route::post('reset_password', 'AuthController@resetPassword')->name('user_reset_password');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('verified');

    Route::get('/settings/account', 'SettingsController@account')->name('account');
    Route::get('/settings/security', 'SettingsController@security')->name('security');
    Route::get('/settings/notifications', 'SettingsController@notifications')->name('notifications');
    Route::get('/settings/payment', 'SettingsController@payment')->name('payment');

    /**/
    Route::get('paymens', 'HomeController@pay_payments')->name('pay_payments');
    Route::get('paymens/transactions', 'HomeController@pay_transactions')->name('pay_transactions');
    Route::get('paymens/withdraw', 'HomeController@pay_withdraw')->name('pay_withdraw');

});
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('users', 'AdminController@users')->name('users');
    Route::get('proposals', 'AdminController@proposals')->name('proposals');
    Route::get('withdraw-money', 'AdminController@withdraw')->name('withdraw');
   
    Route::delete('users/{id}', 'AdminController@destroy')->name('users.delete');

    
    // Route::get('changeStatus', 'AdminController@changeStatus')->name('changeStatus');
    Route::resource('user', AdminController::class);
    Route::get('userFetchList', 'AdminController@userFetchList');
    Route::get('active_deactive_user/{id}', 'AdminController@active_deactive_user');

    //Route::delete('deleted/{id}', [AdminController::class, 'destroy']);
    Route::resource('category','CategoryController');
    Route::resource('categor', CategoryController::class);
    //Route::resource('dcategor', CategoryController::class);
    //Route::get('edit-cat/{id}', 'CategoryController@edit');
    Route::put('update-cat/{id}', 'CategoryController@update')->name('update');
    Route::delete('dcategor/{id}', 'CategoryController@destroy')->name('destroy');


    Route::resource('subcategory','SubCategoryController');
    Route::resource('sub', SubCategoryController::class);
    Route::get('subcategory-edit/{id}', 'SubCategoryController@edit')->name('edit');
    Route::put('subcategory-update/{id}', 'SubCategoryController@update')->name('update');
    Route::delete('delete/{id}', 'SubCategoryController@destroy')->name('destroy');


    Route::resource('requests','RequestsController');
    //Route::get('requests', 'RequestsController@create')->name('create');

    Route::resource('tags','TagController');

});

Route::group(['middleware' => ['auth','seller']], function () {
    
    Route::get('my-account/sales', 'AuthSellerController@active')->name('active');
    Route::get('my-account/sales/pending', 'AuthSellerController@pending')->name('pending');
    Route::get('my-account/sales/delivered', 'AuthSellerController@delivered')->name('delivered');
    Route::get('my-account/sales/completed', 'AuthSellerController@completed')->name('completed');
    Route::get('my-account/sales/rejected', 'AuthSellerController@rejected')->name('rejected');
    Route::get('requests', 'AuthSellerController@requests')->name('requests');
    Route::get('user-offer/', 'AuthSellerController@offer_active')->name('offer_active');
    Route::get('user-offer/pending', 'AuthSellerController@offer_pending')->name('offer_pending');
    Route::get('user-offer/inactive', 'AuthSellerController@offer_inactive')->name('offer_inactive');
    Route::get('user-offer/rejected', 'AuthSellerController@offer_rejected')->name('offer_rejected');
    Route::get('creat-offer', 'AuthSellerController@creat_offer')->name('creat_offer');


});

Route::group(['middleware' => ['auth','buyer']], function () {
    
    Route::get('manage-orders', 'AuthBuyerController@active')->name('active');
    Route::get('manage-orders/pending', 'AuthBuyerController@pending')->name('pending');
    Route::get('manage-orders/delivered', 'AuthBuyerController@delivered')->name('delivered');
    Route::get('manage-orders/completed', 'AuthBuyerController@completed')->name('completed');
    Route::get('manage-orders/rejected', 'AuthBuyerController@rejected')->name('rejected');
    /**/
    Route::get('my-requests', 'AuthBuyerController@request_active')->name('request_active');
    Route::get('my-requests/pending', 'AuthBuyerController@request_pending')->name('request_pending');
    Route::get('my-requests/paused', 'AuthBuyerController@request_paused')->name('request_paused');
    Route::get('my-requests/expired', 'AuthBuyerController@request_expired')->name('request_expired');
    Route::get('my-requests/rejected', 'AuthBuyerController@request_rejected')->name('request_rejected');
    Route::get('request/new', 'AuthBuyerController@request_new')->name('request_new');
});

Route::fallback(function () {
    return view('errors.404');
});
 

Route::get('/logged-in-devices', 'LoggedInDeviceManager@index')
    ->name('logged-in-devices.list')
    ->middleware('auth');

Route::get('/logout/all', 'LoggedInDeviceManager@logoutAllDevices')
    ->name('logged-in-devices.logoutAll')
    ->middleware('auth');

Route::get('/logout/{device_id}', 'LoggedInDeviceManager@logoutDevice')
    ->name('logged-in-devices.logoutSpecific')
    ->middleware('auth');   
Auth::routes();


