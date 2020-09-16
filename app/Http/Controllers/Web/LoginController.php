<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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
