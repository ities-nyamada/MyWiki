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

# ネームスペースがweb
Route::group(['namespace' => 'Web'], function () {
    # ログイン画面へのルート
    Route::get('login', 'LoginController@index')->name('Login.index');

    # ホーム画面へのルート
    Route::get('index', 'HomeController@index')->name('Home.index');
});
    