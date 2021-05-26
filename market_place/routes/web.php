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

Auth::routes();

Route::resource('textbooks', 'TextbookController');

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
// Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
// Route::put('users/{id}', 'UserController@update')->name('users.update');


Route::get('register_histories','RegisterHistoryController@index')->name('register_histories.index');
Route::resource('textbooks','TextbookController');
Auth::routes();

Route::resource('textbooks', 'TextbookController');
