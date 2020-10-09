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
Route::group(['middleware', 'web'], function()
{
    Route::get('/', 'RestaurantController@index');
    Route::get('/list', 'RestaurantController@list');
    Route::post('/add', 'RestaurantController@add');
    Route::view('add', 'add');
    Route::get('/delete/{id}', 'RestaurantController@delete');
    Route::get('/edit/{id}', 'RestaurantController@edit');
    Route::post('/edit/{id}', 'RestaurantController@update');
    Route::view('register','registration');
    Route::post('/register', 'RestaurantController@register');
    Route::view('login','login');
    Route::post('/login', 'RestaurantController@login');
    Route::get('/logout', 'RestaurantController@logout');
});



