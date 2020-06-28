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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
=======

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('create', 'ProductController@create')->name('create');
        Route::post('store', 'ProductController@store')->name('store');
        Route::put('update/{id}', 'ProductController@update')->name('update');
        Route::get('delete/{id}', 'ProductController@destroy')->name('delete');
        Route::get('edit/{id}', 'ProductController@edit')->name('edit');
    });
    Route::prefix('guest')->name('guest.')->group(function () {
        Route::get('/', 'GuestController@index')->name('index');
        Route::get('create', 'GuestController@create')->name('create');
        Route::post('store', 'GuestController@store')->name('store');
        Route::put('update/{id}', 'GuestController@update')->name('update');
        Route::get('delete/{id}', 'GuestController@destroy')->name('delete');
        Route::get('edit/{id}', 'GuestController@edit')->name('edit');
    });
    Route::prefix('rank')->name('rank.')->group(function () {
        Route::get('/', 'RankController@index')->name('index');
        Route::get('create', 'RankController@create')->name('create');
        Route::post('store', 'RankController@store')->name('store');
        Route::put('update/{id}', 'RankController@update')->name('update');
        Route::get('delete/{id}', 'RankController@destroy')->name('delete');
        Route::get('edit/{id}', 'RankController@edit')->name('edit');
    });
>>>>>>> Stashed changes
});
