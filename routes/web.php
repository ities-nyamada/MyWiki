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

# トップページを返す
Route::get('/', function () {
    return view('index');
});

# ネームスペースがweb
Route::group(['namespace' => 'Web'], function () {

    # アカウント作成へのルート
    Route::get('users/create', 'UserController@create')->name('users.create');

    # 登録処理へのルート
    Route::post('person', 'UserController@store');
    
    # ログイン画面へのルート
    Route::get('top', 'LoginController@index')->name('Login.index');

    Route::get('logout_top', 'LoginController@logout');

    # ホーム画面へのルート
});
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
