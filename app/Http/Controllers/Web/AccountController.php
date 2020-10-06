<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
    /**
     * アカウント登録画面のviewを返す
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }



    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            # アカウントの登録
            $account = Account::saveAccount($request->all());

            DB::commit();
        } catch (\Exception $e) {
            \Log::info($e);
            DB::rollback();
            return redirect()->back()->withInput()->with('message_danger','登録処理に失敗しました。');
        }

        #ログイン処理
        Auth::login($account);

        $request->session()->flash('message_success', '登録が完了しました。');
        return redirect()->route('home',['account'=>$account]);
    }
}
