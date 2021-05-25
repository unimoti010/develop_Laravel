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
Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('textbooks', 'TextbookController');

Route::post('purchase_histories/notification', 'PurchaseHistoryController@notification')
->name('purchase_histories.notification');

//認証ミドルウェア
Route::group(['middleware' => ['auth']], function (){
    Route::get('purchase_histories', 'PurchaseHistoryController@index')->name('purchase_histories.index');
});