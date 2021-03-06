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

// アパートとかも後々トップ画面に表示するかも？
Route::get('hotel', 'HotelController@index')->name('hotels.index');
Route::get('hotel/{hotel}', 'HotelController@show')->name('hotels.show');

// maybe {hotel} should be {room}
Route::post('booking/{hotel}', 'BookingsController@create')->name('bookings.create');
Route::post('booking/{room}/book', 'BookingsController@store')->name('bookings.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
