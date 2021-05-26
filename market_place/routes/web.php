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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('home', 'HomeController@index')->name('home');
Route::resource('register_histories', 'RegisterHistoryController');
Route::resource('textbooks', 'TextbookController');

// 管理者のみ
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {
    Route::get('admin/allUsers', 'AdminController@allUsers')->name('admin.allUsers');
    Route::get('admin/allTextbooks', 'AdminController@allTextbooks')->name('admin.allTextbooks');
});

Route::get('register_histories','RegisterHistoryController@index')->name('register_histories.index');
Route::get('register_histories/{textbook}','RegisterHistoryController@show')->name('register_histories.show');
Route::resource('textbooks','TextbookController');
Auth::routes();

//会員情報画面関連
Route::get('user/index', 'UserController@index')->name('users.index');
Route::resource('users', 'UserController');

