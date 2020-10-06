<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * ログイン後のリダイレクト先指定.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Illuminate\Foundation\Auth\AuthenticatesUsers
     *
     * Get the login username to be used by the controller.
     *ユーザーネームとして利用する値
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    public function index()
    {
        return view('/');
    }


    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'),])) {
            return redirect('/home');
        } else {
            $request->session()->flash('message_danger', 'ログインに失敗しました。ログイン情報をお確かめください');
            return redirect('/')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flash('message_success', 'ログアウトしました。');
        return redirect('/');
    }
}
