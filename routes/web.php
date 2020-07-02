<?php

use Illuminate\Support\Facades\Route;

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
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);
//login
Route::get('/', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('create', 'ProductController@create')->name('create');
        Route::post('store', 'ProductController@store')->name('store');
        Route::put('update/{id}', 'ProductController@update')->name('update');
        Route::get('delete/{id}', 'ProductController@destroy')->name('delete');
        Route::get('edit/{id}', 'ProductController@edit')->name('edit');
        Route::get('detail/{id}', 'ProductController@detail')->name('detail');
        Route::get('show', 'ProductController@show')->name('show');
    });

    Route::prefix('guest')->name('guest.')->group(function () {
        Route::get('/', 'GuestController@index')->name('index');
        Route::get('create', 'GuestController@create')->name('create');
        Route::post('store', 'GuestController@store')->name('store');
        Route::put('update/{id}', 'GuestController@update')->name('update');
        Route::get('delete/{id}', 'GuestController@destroy')->name('delete');
        Route::get('edit/{id}', 'GuestController@edit')->name('edit');
    });

    Route::prefix('ranks')->name('rank.')->group(function () {
        Route::get('/', 'RankController@index')->name('index');
        Route::get('create', 'RankController@create')->name('create');
        Route::post('store', 'RankController@store')->name('store');
        Route::put('update/{id}', 'RankController@update')->name('update');
        Route::get('delete/{id}', 'RankController@destroy')->name('delete');
        Route::get('edit/{id}', 'RankController@edit')->name('edit');
    });

    Route::prefix('sale')->name('sale.')->group(function () {
        Route::get('/', 'SaleController@index')->name('index');
        Route::get('create', 'SaleController@create')->name('create');
        Route::post('store', 'SaleController@store')->name('store');
        Route::put('update/{id}', 'SaleController@update')->name('update');
        Route::get('delete/{id}', 'SaleController@destroy')->name('delete');
        Route::get('edit/{id}', 'SaleController@edit')->name('edit');
        Route::get('show', 'SaleController@show')->name('show');
    });


    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');
        Route::put('update/{id}', 'UserController@update')->name('update');
        Route::get('delete/{id}', 'UserController@destroy')->name('delete');
        Route::get('edit/{id}', 'UserController@edit')->name('edit');
    });

    // Route::prefix('detail')->name('detail.')->group(function () {
    //     Route::get('/', 'DetailController@index')->name('index');
    //     Route::get('create', 'DetailController@create')->name('create');
    //     Route::post('store', 'DetailController@store')->name('store');
    //     Route::put('update/{id}', 'DetailController@update')->name('update');
    //     Route::get('delete/{id}', 'DetailController@destroy')->name('delete');
    //     Route::get('edit/{id}', 'DetailController@edit')->name('edit');
    // });



    Route::prefix('report')->name('report.')->group(function () {
        Route::get('/', 'ReportController@index')->name('index');
        Route::get('data', 'ReportController@getData')->name('data');
    });

    Route::prefix('bill')->name('bill.')->group(function () {
        Route::get('/', 'BillController@create')->name('create');
        Route::post('store', 'BillController@store')->name('store');
        Route::get('data', 'BillController@getData')->name('data');
    });

    //facebook -------------
Route::get('login/facebook', 'Auth\LoginController@f_redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@f_handleProviderCallback')->name('login.facebook.callback');
//google--------------
Route::get('login/google', 'Auth\LoginController@g_redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@g_handleProviderCallback')->name('login.google.callback');
//---------------------

    
});
