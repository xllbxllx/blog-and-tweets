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

// Route::get('/', 'GuestController@index');
// // User profile
Route::get('/@{user}', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// entries
Route::get('/entries/create', 'EntryController@create');
Route::post('/entries', 'EntryController@store');

// Route::get('/entries/{entryBySlug}', 'GuestController@show');

// ->middleware('can:update,post');
Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries/{entry}', 'EntryController@update');

// Route::get('/@{user}', 'UserController@show');

// Twitter
Route::get('/twitter/login', 'TwitterController@login')->name('twitter.login');
Route::get('/twitter/callback', 'TwitterController@callback')->name('twitter.callback');
Route::get('/twitter/error', 'TwitterController@error')->name('twitter.error');
Route::get('/twitter/logout', 'TwitterController@logout')->name('twitter.logout');
// Tweets
Route::get('/tweets', 'TweetController@update');


// Public routes
Route::get('/', 'GuestController@index');
Route::get('/entries/{entryBySlug}', 'GuestController@show');
