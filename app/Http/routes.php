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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::resource('home', 'HomeController@index');
Route::resource('approved', 'ApproveController');
Route::resource('api/v1/booking', 'BookingApiController');
Route::resource('api/v1/cancel', 'CancelApiController');
