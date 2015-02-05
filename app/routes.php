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

	//Route for DistrictsController
	Route::get('/districts','DistrictsController@index');
	Route::post('/districts/store','DistrictsController@store');
	Route::post('/districts/update/{id}','DistrictsController@update');
	Route::get('/districts/enable/{id}','DistrictsController@enable');
	Route::get('/districts/disable/{id}','DistrictsController@disable');
	Route::get('/districts/delete/{id}','DistrictsController@destroy');
	Route::get('/districts/show/{id}','DistrictsController@show');

	//Route for StatesController
	Route::get('/states','StatesController@index');
	Route::post('/states/store','StatesController@store');
	Route::post('/states/update/{id}','StatesController@update');
	Route::get('/states/enable/{id}','StatesController@enable');
	Route::get('/states/disable/{id}','StatesController@disable');
	Route::get('/states/delete/{id}','StatesController@destroy');
	Route::get('/states/show/{id}','StatesController@show');

	//Route for SubcategoriesController
	Route::get('/subcategories','SubcategoriesController@index');
	Route::post('/subcategories/store','SubcategoriesController@store');
	Route::post('/subcategories/update/{id}','SubcategoriesController@update');
	Route::get('/subcategories/enable/{id}','SubcategoriesController@enable');
	Route::get('/subcategories/disable/{id}','SubcategoriesController@disable');
	Route::get('/subcategories/delete/{id}','SubcategoriesController@destroy');
	Route::get('/subcategories/show/{id}','SubcategoriesController@show');


	//Route for SubscriptionsController
	Route::get('/subscriptions','SubscriptionsController@index');
	Route::get('/subscriptions/enable/{id}','SubscriptionsController@enable');
	Route::get('/subscriptions/disable/{id}','SubscriptionsController@disable');
	Route::get('/subscriptions/delete/{id}','SubscripitionsController@destroy');
});


Route::post('/subscriptions','SubscriptionsController@store');
Route::get('/subscriptions/unsubscribe/{email}/{id}', 'SubscriptionsController@disable');

Route::group(array('before' => "auth|institute-or-admin"), function() {
Route::get('/venues/create','VenuesController@create');
Route::post('/venues/store','VenuesController@store');
Route::get('/venues','VenuesController@index');
});

//Route for VenuesController
Route::group(array('before' => "auth|institute-or-admin|venueOwn-or-admin"), function() {
Route::get('/venues/edit/{id}','VenuesController@edit');
Route::post('/venues/update/{id}','VenuesController@update');
Route::get('/venues/delete/{id}','VenuesController@destroy');
});


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


Route::get('/aboutus', function()
{
return View::make('Miscellaneous.aboutus');
});

Route::get('/support', function()
{
return View::make('Miscellaneous.support');
});

Route::get('/terms', function()
{
return View::make('Miscellaneous.terms');
});

Route::get('/contactus', function()
{
	return View::make('Miscellaneous.contactus');
});
