@extends('templates.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mt-5">
                <h5 class="card-header text-center text-white bg-main-color">アカウントを新規登録</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <form action="/account" method="post">
                            @csrf
                                <div class="form-group  mt-5 mb-3">
                                    <label>名前</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group  mt-5 mb-3">
                                    <label>パスワード</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                                <!-- <div class="form-group  mt-5 mb-3">
                                    <label>氏名</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group  mt-5 mb-3">
                                    <label>氏名カナ</label>
                                    <input type="text" class="form-control" name="name_kana">
                                </div> -->
                                <div class="form-group  mt-5 mb-3">
                                    <label>メールアドレス</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group mt-5">
                                    <div class="d-flex justify-content-around">
                                        <input type="button" onclick="location.href='/login'" value="戻る" class="form-control btn btn-secondary" style="width:150px">
                                        <input type="submit" value="登録" class="form-control btn btn-login" style="width:150px">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection