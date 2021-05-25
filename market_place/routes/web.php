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

//ログイン・ログアウト関連
Route::get('/','Auth\LoginController@showLoginForm');
Route::get('home', 'HomeController@index')->name('home');
//Route::get('logout', 'Auth\LoginController@logout');


//会員情報画面関連
Route::get('user/index', 'UserController@index')->name('users.index');
Route::resource('users', 'UserController');
// Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
// Route::put('users/{id}', 'UserController@update')->name('users.update');


Route::get('register_histories','RegisterHistoryController@index')->name('register_histories.index');
Route::resource('textbooks','TextbookController');
Auth::routes();

Route::resource('textbooks', 'TextbookController');
