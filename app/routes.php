<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

//To allow access only to admin.
Route::group(array('before' => "auth|admin"), function() {
	Route::get('/admin','HomeController@showAdminHome');
});

/*
	Routes for Main Admin section of admin panel.
	Only Main Admin is allowed access here.  
*/
Route::group(array('before' => "auth|admin|mainAdmin"), function() {
	Route::get('/admins','AdminsController@index');
	Route::post('/admins/store','AdminsController@store');
	Route::get('/admins/enable/{id}','AdminsController@enable');
	Route::get('/admins/disable/{id}','AdminsController@disable');
	Route::get('/admins/delete/{id}','AdminsController@destroy');
	Route::get('/admins/show/{id}','AdminsController@show');
});


Route::group(array('before' => "auth|admin"), function() {	
	Route::get('/customers','CustomersController@index');
	Route::post('/customers/store','CustomersController@store');
	Route::post('/customers/update/{id}','CustomersController@update');
	Route::get('/customers/enable/{id}','CustomersController@enable');
	Route::get('/customers/disable/{id}','CustomersController@disable');
	Route::get('/customers/delete/{id}','CustomersController@destroy');
	Route::get('/customers/show/{id}','CustomersController@show');
});


//Route for FeaturesController
Route::group(array('before' => "auth|admin"), function() {	
	Route::get('/features','FeaturesController@index');
	Route::post('/features/store/{id}','FeaturesController@store');
	Route::get('/features/enable/{id}','FeaturesController@enable');
	Route::get('/features/disable/{id}','FeaturesController@disable');
	Route::get('/features/delete/{id}','FeaturesController@destroy');
	Route::get('/features/show/{id}','FeaturesController@show');
});

//Route for FeedbacksController
Route::get('/feedbacks/create','FeedbacksController@create');
Route::post('/feedbacks/store','FeedbacksController@store');	

Route::group(array('before' => "auth|admin"), function() {	
	Route::get('/feedbacks','FeedbacksController@index');
	Route::get('/feedbacks/delete/{id}','FeedbacksController@destroy');
	Route::get('/feedbacks/read/{id}','FeedbacksController@read');
	Route::get('/feedbacks/unread/{id}','FeedbacksController@unread');
	Route::get('/feedbacks/done/{id}','FeedbacksController@done');
	Route::get('/feedbacks/undone/{id}','FeedbacksController@undone');
	Route::get('/feedbacks/show/{id}','FeedbacksController@show');
});

Route::group(array('before' => "auth|admin"), function() {	
	//Route for MagazinesController
	Route::get('/magazines','MagazinesController@index');
	Route::post('/magazines/store','MagazinesController@store');
	Route::post('/magazines/update/{id}','MagazinesController@update');
	Route::get('/magazines/enable/{id}','MagazinesController@enable');
	Route::get('/magazines/disable/{id}','MagazinesController@disable');
	Route::get('/magazines/delete/{id}','MagazinesController@destroy');
	Route::get('/magazines/show/{id}','MagazinesController@show');
});


Route::group(array('before' => "auth|admin"), function() {	
	Route::get('/payments','PaymentsController@index');
	Route::get('/payments/create/{id}','PaymentsController@create');
	Route::post('/payments/success','PaymentsController@success');
	Route::post('/payments/failure','PaymentsController@failure');
	Route::post('/payments/cancel','PaymentsController@cancel');
});


Route::group(array('before' => "auth|admin"), function() {
	//Route for SubscriptionsController
	Route::get('/subscriptions','SubscriptionsController@index');
	Route::get('/subscriptions/enable/{id}','SubscriptionsController@enable');
	Route::get('/subscriptions/disable/{id}','SubscriptionsController@disable');
	Route::get('/subscriptions/delete/{id}','SubscripitionsController@destroy');
});


Route::post('/subscriptions','SubscriptionsController@store');
Route::get('/subscriptions/unsubscribe/{email}/{id}', 'SubscriptionsController@disable');

//Route for UsersController

Route::group(array('before' => "auth|admin"), function() {
	Route::get('/users','UsersController@index');
	Route::get('/users/enable/{id}','UsersController@enable');
	Route::get('/users/disable/{id}','UsersController@disable');
	Route::get('/users/delete/{id}','UsersController@destroy');
	Route::get('/users/history','UsersController@history');
});

Route::group(array('before' => "auth"), function() {
	Route::get('/users/changepassword','UsersController@getChangePassword');
	Route::get('/users/edit','VenuesController@edit');
	Route::post('/users/update','UsersController@update');
	Route::get('/users/logout','UsersController@getLogout');
	Route::get('/users/subscribe/{id}','UsersController@subscribe');
	Route::get('/users/show/{id}','UsersController@show');
});

/*  To verify that unsubscribe request came from a valid email only,
 	we check user id and email both.
 
*/
Route::get('/users/unsubscribe/{email}/{id}','UsersController@unsubscribe');

Route::group(array('before' => "guest-or-admin"), function() {
	Route::get('/users/login', 'UsersController@getLogin');
	Route::get('/users/signup','UsersController@getSignUp');
	Route::get('/users/registration/verify/{userId}/{confirmationCode}','UsersController@getEmailVerify');
	Route::get('/users/password/remind','RemindersController@getRemind');
	Route::get('/users/password/reset/{token}','RemindersController@getReset');
	//Routes for facebook signin of user

	Route::get('/login/fb','UsersController@loginFb');
	Route::get('/login/fb/callback','UsersController@loginFbCallback');
});


Route::group(array('before' => "csrf"), function() {
	Route::post('/users/login/submit','UsersController@postAuthenticate');
	Route::post('/users/signup/submit','UsersController@postSignup');
	Route::post('/users/changepassword/submit','UsersController@postChangePassword');
	Route::post('/users/password/remind/submit','RemindersController@postRemind');
	Route::post('/users/password/reset/submit','RemindersController@postReset');
});

Route::get('/home', function()
{
return View::make('Miscellaneous.home');
});

Route::get('/aboutus', function()
{
return View::make('Miscellaneous.aboutus');
});

Route::get('/contactus', function()
{
return View::make('Miscellaneous.contactus');
});

Route::get('/item', function()
{
return View::make('Miscellaneous.item');
});

Route::get('/support', function()
{
return View::make('Miscellaneous.support');
});

Route::get('/terms', function()
{
return View::make('Miscellaneous.terms');
});