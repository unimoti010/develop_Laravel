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

Route::get('/','Auth\LoginController@showLoginForm');
Route::get('home', 'HomeController@index')->name('home');
Route::get('register_histories','RegisterHistoryController@index')->name('register_histories.index');
Route::get('register_histories/{textbook}','RegisterHistoryController@show')->name('register_histories.show');
Route::resource('textbooks','TextbookController');
Auth::routes();

Route::resource('textbooks', 'TextbookController');