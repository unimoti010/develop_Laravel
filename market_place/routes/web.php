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

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('register_histories', 'RegisterHistoryController');

Route::get('register_histories','RegisterHistoryController@index')->name('register_histories.index');
Route::get('register_histories/{textbook}','RegisterHistoryController@show')->name('register_histories.show');

Route::resource('textbooks', 'TextbookController');
Route::get('textbooks/store','TextbookController@store')->name('textbooks.store');
Auth::routes();

Route::post('textbooks/store_to_purchase', 'TextbookController@purchaseTable')->name('textbooks.purchaseTable');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
->name('purchase_histories.notification');

//認証ミドルウェア
Route::group(['middleware' => ['auth']], function (){
    Route::get('purchase_histories', 'PurchaseHistoryController@index')->name('purchase_histories.index');
});
Route::get('users/index', 'UserController@index')->name('users.index');

//会員情報画面関連
Route::get('user/index', 'UserController@index')->name('users.index');
Route::resource('users', 'UserController');

Route::post('textbooks', 'TextbookController@purchaseTable')->name('textbooks.purchaseTable');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
->name('purchase_histories.notification');

// 管理者のみ
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {
    Route::get('admin/allUsers', 'AdminController@allUsers')->name('admin.allUsers');
    Route::get('admin/allTextbooks', 'AdminController@allTextbooks')->name('admin.allTextbooks');
});