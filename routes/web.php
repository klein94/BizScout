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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/test', 'HomeController@authRedirect');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
		Route::get('prospects', ['as' => 'pages.prospects', 'uses' => 'PageController@prospects']);
		Route::get('findleads/{id?}', ['as' => 'pages.findleads', 'uses' => 'PageController@findleads']);
		Route::get('contact/{id}', ['as' => 'pages.contact', 'uses' => 'PageController@getContact']);
		Route::post('save', ['as' => 'pages.save', 'uses' => 'PageController@store']);
		Route::get('email_campaign', ['as' => 'pages.email_campaign', 'uses' => 'PageController@email_campaign']);
		Route::get('contactlist', ['as' => 'pages.contactlist', 'uses' => 'PageController@contactlist']);
		Route::get('compose_email', ['as' => 'pages.compose_email', 'uses' => 'PageController@compose_email']);
		Route::get('inbox', ['as' => 'pages.inbox', 'uses' => 'PageController@inbox']);
		Route::get('email', ['as' => 'pages.email', 'uses' => 'API\PlacesController@sendMail']);
		Route::get('emailmanagement', ['as' => 'pages.emailmanagement', 'uses' => 'PageController@emailmanagement']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

