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

// Route::get('/main', 'HomeController@showMain');
Route::get('/main', 'HomeController@index');
Route::get('/profile', 'ProfileController@showProfile');
Route::post('/uploadfile/{userId}', 'ProfileController@uploadFile');
Route::get('/notifications', 'NotificationController@showNotification');
Route::get('/settings', 'SettingController@showSetting');
Route::get('/adminpage', 'AdminController@show');

Route::get('/', function () {
  return redirect('/login');
});

Route::auth();

Route::post('/home', 'HomeController@index');

Route::post('/twitwrite/{user}', 'ProfileController@addTwit');
