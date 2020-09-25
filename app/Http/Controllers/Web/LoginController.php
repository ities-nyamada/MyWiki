<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログイン画面のviewを返す
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }

        /**
     * ログイン画面のviewを返す
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }
}
