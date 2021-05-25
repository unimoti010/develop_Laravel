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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');

Route::get('admin/allUsers', 'AdminController@allUsers')->name('admin.allUsers');
Route::get('admin/allTextbooks', 'AdminController@allTextbooks')->name('admin.allTextbooks');

Route::resource('register_histories','RegisterHistoryController');
Route::resource('textbooks','TextbookController');
Route::resource('textbooks', 'TextbookController');

Auth::routes();
