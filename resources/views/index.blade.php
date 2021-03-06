@extends('templates.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 loginleft">
            <div class="row">
                <div class="col-12 align-self-center">
                    <div class="logo mb-4 text-center text-white">
                        <i class="fas fa-dice-d20 fa-1x my-secondary-icon"></i> My Wiki
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4 offset-4 align-self-center">
                    <form action="/login" method="POST" >
                        @csrf
                        <div class="mb-4 text-center">
                            <i class="fas fa-dice-d20 fa-5x my-icon mb-4"></i>
                            <h1>ログイン</h1>
                        </div>
                        <div>
                            <input class="form-control mb-4" type="text" placeholder="メールアドレス" name="email">
                        </div>
                        <div>
                            <input class="form-control mb-4" type="password" placeholder="パスワード" name="password">
                        </div>
                        <div class="text-center">
                            <input class="btn btn-login mb-4 btn-submit w-100" type="submit" name="submit" value="ログイン">
                        </div>
                    </form>
                    <div class="mb-3 text-right forgot-hover">
                        <a href="/account/create">アカンウト新規登録はこちら</a>
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