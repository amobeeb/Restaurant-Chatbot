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

Route::get('/order', 'OrderController@order');
Route::get('/delivery', 'BookingController@delivery');
Route::get('/pickup', 'BookingController@pickup');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
Route::get('/product', 'ProductController@index');
Route::post('/product/store', 'ProductController@store');
// Route::get('/booking', 'BookingController@index');
Route::get('/order/{email}/{amount}/{mobile}', 'OrderController@index');
Route::get('/order/status/{reference}/{mobile}/{amount}', 'OrderController@status');
// Route::post('/booking', 'BookingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
