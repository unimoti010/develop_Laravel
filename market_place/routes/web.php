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

Route::resource('textbooks', 'TextbookController');

Route::post('textbooks/store_to_purchase', 'TextbookController@purchaseTable')->name('textbooks.purchaseTable');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
    ->name('purchase_histories.notification');

//認証ミドルウェア
Route::group(['middleware' => ['auth']], function () {
    Route::get('textbooks/store', 'TextbookController@store')->name('textbooks.store');
    Route::post('textbooks', 'TextbookController@purchaseTable')->name('textbooks.purchaseTable');
    Route::resource('register_histories', 'RegisterHistoryController');
    Route::get('register_histories', 'RegisterHistoryController@index')->name('register_histories.index');
    Route::get('register_histories/{textbook}', 'RegisterHistoryController@show')->name('register_histories.show');
    Route::get('purchase_histories', 'PurchaseHistoryController@index')->name('purchase_histories.index');
});

Route::resource('users', 'UserController');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
    ->name('purchase_histories.notification');

// 管理者のみ
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {
    Route::get('admin/allUsers', 'AdminController@allUsers')->name('admin.allUsers');
    Route::get('admin/allTextbooks', 'AdminController@allTextbooks')->name('admin.allTextbooks');
});

Auth::routes();
