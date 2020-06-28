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
    });
    Route::prefix('guest')->name('guest.')->group(function () {
        Route::get('/', 'GuestController@index')->name('index');
        Route::get('create', 'GuestController@create')->name('create');
        Route::post('store', 'GuestController@store')->name('store');
        Route::put('update/{id}', 'GuestController@update')->name('update');
        Route::get('delete/{id}', 'GuestController@destroy')->name('delete');
        Route::get('edit/{id}', 'GuestController@edit')->name('edit');
    });
});
