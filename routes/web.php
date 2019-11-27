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
Route::get('/user', function () {
    return view('user');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/rating', function () {
    return view('rating');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('booking/foods','FoodsController');
Route::resource('booking/items','ItemsController');
Route::resource('user/displayfood','DisplayFoodController');
Route::resource('user/displayitem','DisplayItemController');




Auth::routes();

