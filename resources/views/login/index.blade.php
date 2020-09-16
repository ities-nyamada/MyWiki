@extends('templates.base')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 loginleft">
            <div class="text-white logintitle">
            <i class="fas fa-dice-d20 fa-1x my-secondary-icon"></i> My Wiki
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4 offset-4 align-self-center">
                    <form action="" method="POST" >
                        @csrf
                        <div class="mb-4 text-center">
                            <i class="fas fa-dice-d20 fa-5x my-icon"></i>
                            <h1>My Wikiへようこそ</h1>
                        </div>
                        <div>
                            <input class="form-control mb-4" type="text" placeholder="ログインID" name="id">
                        </div>
                        <div>
                            <input class="form-control mb-4" type="password" placeholder="パスワード" name="password">
                        </div>
                        <div class="text-center">
                            <input class="btn btn-login mb-4 btn-submit w-100" type="submit" name="submit" value="ログイン">
                        </div>
                    </form>
                    <div class="mb-3 text-right forgot-hover">
                        <a href="">新規登録はこちら</a>
                    </div>
                    <div class="mb-3 text-right forgot-hover">
                        <a href="">IDをお忘れの方はこちら</a>
                    </div>
                    <div class="mb-3 text-right forgot-hover">
                        <a href="">パスワードをお忘れの方はこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection