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
// Route::get('/', 'HomeController@index')->name('home');
// Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::resource('textbooks', 'TextbookController');

Route::post('textbooks', 'TextbookController@purchaseTable')->name('textbooks.purchaseTable');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
->name('purchase_histories.notification');

//認証ミドルウェア
Route::group(['middleware' => ['auth']], function (){
    Route::get('purchase_histories', 'PurchaseHistoryController@index')->name('purchase_histories.index');
});
Route::get('users/index', 'UserController@index')->name('users.index');
Route::resource('users', 'UserController');


Auth::routes();
