<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPlan;
use App\Models\AutoOffer;
use App\Models\Seller;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Infomations;

class HomeController extends Controller
{

    /**
     * ログイン後トップ画面のviewを返す
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }
}
