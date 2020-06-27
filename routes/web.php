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
Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('product')->name('admin-domain.')->group(function () {
        Route::get('/', 'ProductController@index')->name('product.index');
    });
});
