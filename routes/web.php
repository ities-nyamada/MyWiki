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
    Route::get('account/create', 'AccountController@create')->name('accounts.create');

    #アカウント登録処理へのルート
    Route::post('account', 'AccountController@store');
    


    #------------------------------------------------------------------------------
    # 認証ユーザーだけが見れる画面あああああああああああ
    #------------------------------------------------------------------------------        
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/home', 'HomeController@index')->name('home');
    });

});
    
Auth::routes();

Route::get('/laravel', function () {
    return view('welcome');
});

# ログイン画面へルート
Route::get('login', function () {
    return view('index');
})->name('/login');
