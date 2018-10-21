<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/',	[
	'as' => 'home',
	'uses' => 'PagesController@getHome'
	]);
	Route::get('about',	[
	'as' => 'about',
	'uses' => 'PagesController@getAbout'
	]);
	Route::get('gallery',	[
	'as' => 'gallery',
	'uses' => 'PhotoController@gallery'
	]);
	Route::get('contact',	[
	'as' => 'contact',
	'uses' => 'PagesController@getContact'
	]);
	Route::resource('photos', 'PhotoController');

	// Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'UsersController@getLogout');

	// Registration routes...
	// Route::get('auth/register', 'Auth\AuthController@getRegister');
	// Route::post('auth/register', 'Auth\AuthController@postRegister');
});
