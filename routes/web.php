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

Route::get('/', 'HomeController@index')->name('dashboard');

Auth::routes();

Route::resource('merchants', 'MerchantController');

Route::resource('codes', 'CodeController');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::post('/dashboard', 'HomeController@index')->name('dashboard');


Route::resource('users', 'UserController');