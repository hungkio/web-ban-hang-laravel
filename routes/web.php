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

Route::get('index', 'UserController@showProfile')->middleware('auth');

Route::get('/', function () {
    return view('customer.index');
});
Route::get('login', function(){
    return view('admin.dangnhap');
});
Route::get('gio-hang', function(){
    return view('admin.gio-hang');
});
Route::get('thanh-toan', function(){
    return view('admin.thanh-toan');
});
Route::get('tintuc', function(){
    return view('customer.tintuc');
});
Route::get('sanpham', function(){
    return view('customer.sanpham');
});
Route::get('lienhe', function(){
    return view('customer.lienhe');
});
Route::get('gioi-thieu', function(){
    return view('customer.Gioi-thieu');
});
Route::get('chitiettintuc', function(){
    return view('customer.chitiettintuc');
});
Route::get('chitietsanpham', function(){
    return view('customer.chitietsanpham');
});
