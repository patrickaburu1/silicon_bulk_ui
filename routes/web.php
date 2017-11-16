<?php

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
Auth::routes();

	    Route::get('/', function () {
		    return view('welcome');
		});


//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'auth'], function () {

	Route::group(['prefix'=>'admin'], function () {
	    
	

		// admin dashoard or home
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

		//admin buy sms credit
		 Route::get('buy-credit', 'DashboardController@index')->name('buy-credit');
		//admin send message
		  Route::get('send-sms', 'DashboardController@index')->name('send-sms');

		//admin shot code inbox
		  Route::get('short-code-inbox', 'DashboardController@index')->name('short-code-inbox');

		//admin shortcode inbox     
		  Route::get('send-dynamic-sms', 'DashboardController@index')->name('send-dynamic-sms'); 

		  //admin outbox messages     
		  Route::get('outbox', 'DashboardController@index')->name('outbox'); 

		   //admin draft messages     
		  Route::get('draft-messages', 'DashboardController@index')->name('draft-messages');

		  //admin schedule messages     
		  Route::get('schedule-messages', 'DashboardController@index')->name('schedule-messages'); 

		  //admin contact phonebook    
		  Route::get('phone-book', 'DashboardController@index')->name('phone-book'); 

		  //admin contact marketing-list
		  Route::get('marketing-list', 'DashboardController@index')->name('marketing-list'); 

		  //admin sender-ids
		  Route::get('my-sender-id', 'DashboardController@index')->name('my-sender-id'); 

		  //admin transactions 
		  Route::get('transactions', 'DashboardController@index')->name('transactions'); 

		  //admin transfer sms credit
		  Route::get('transfer-credit', 'DashboardController@index')->name('transfer-credit'); 

		  //admin admin tools manage-customers
		  Route::get('manage-customers', 'DashboardController@index')->name('manage-customers'); 

		   //admin admin tools send-sms-customers //review functionality
		  Route::get('send-sms-customers', 'DashboardController@index')->name('send-sms-customers'); 

		   //admin admin tools  credit customers account 
		  Route::get('credit-customers-account', 'DashboardController@index')->name('credit-customers-account'); 

		  //admin admin tools  payment notifications
		  Route::get('payment-notifications', 'DashboardController@index')->name('payment-notifications'); 

		  //admin admin tools  send-email
		  Route::get('send-email', 'DashboardController@index')->name('send-email'); 



		// Get all Reports
		Route::get('reports', 'DashboardController@index')->name('reports');

		// Create Blacklist Manager
		Route::get('blacklist-manager', 'DashboardController@index')->name('blacklist-manager');

		// Create Blacklist Manager
		Route::get('user-manager', 'DashboardController@index')->name('user-manager');;

		// Create Financial Manager
		Route::get('financial-accounting', 'DashboardController@index')->name('financial-accounting');

		// Create General Settings Manager
		Route::get('settings/general', 'DashboardController@index')->name('general-settings');

		// Create Notifications Settings Manager - SMS
		Route::get('settings/sms', 'DashboardController@index')->name('sms-settings');

		// Create Notifications Settings Manager - Email
		Route::get('settings/email', 'DashboardController@index')->name('email-settings');

		// Create API
		Route::get('api/v1', 'DashboardController@index')->name('api-settings');

		// Create SMS Gateway
		Route::get('incoming-sms-gateway', 'DashboardController@index')->name('sms-gateway');

		// Create SMS Rate
		Route::get('sms-rate', 'DashboardController@index')->name('sms-rate');

		// Create SMS Credit Price
		Route::get('sms-credit-price', 'DashboardController@index')->name('sms-price');

		// Create Payment Gateway
		Route::get('payment-gateway', 'DashboardController@index')->name('payment-gateway');

		// Create Currency
		Route::get('currency', 'DashboardController@index')->name('currency');

		// Create Migration
		Route::get('migration', 'DashboardController@index')->name('migration');

		// Create DB Backup
		Route::get('database-backup', 'DashboardController@index')->name('database-backup');

		// Create Tools
		Route::get('tools', 'DashboardController@index')->name('tools');

		// Create Manage Tickets
		Route::get('manage-tickets', 'DashboardController@index')->name('manage-tickets');

		// Create Profile
		Route::get('profile', 'DashboardController@index')->name('profile');

		// Create Logout
		Route::get('logout', 'DashboardController@index')->name('logout');

		// Create Home
		Route::get('home', 'DashboardController@index')->name('home');


		});
});




Route::group(['prefix' => 'reseller'], function(){

 // Reseller dashoard or home
		Route::get('dashboard', 'DashboardController@index')->name('reseller-dashboard');
});

Route::group(['prefix' => 'consumer'], function(){

});

Route::group(['prefix' => 'finance'], function(){

});
