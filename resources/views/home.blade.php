@extends('templates.base')

@section('content')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
    <a class="navbar-brand" href="/home">
        <button type="button" class="btn btn-dark">
            <i class="fas fa-dice-d20 fa-4x my-secondary-icon"> My Wiki</i>
        </button>
    </a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link header-text" href="#">ユーザー：〇〇</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-text" href="#">マイアカウント</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-text" href="/login">ログアウト</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center hometitle">
            <i class="fas fa-dice-d20 fa-1x my-icon"></i> My Wiki
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="検索するワードを入力">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-login">検索</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4 ml-4">
        <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
            <div class="title-box">
                <h5>最近作成された記事</h5>
            </div>
            <div class="box-regular">
                <table class="table table-striped">
                    <thead>
                        <th class="top-reservetitle">タイトル</th>
                        <th class="top-reservetitle">作成者</th>
                        <th class="top-reservetitle">作成日</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
            <div class="title-box">
                <h5>評価の高い記事</h5>
            </div>
            <div class="box-regular ">
                <table class="table table-striped">
                    <thead>
                    <th class="top-reservetitle">タイトル</th>
                        <th class="top-reservetitle">作成者</th>
                        <th class="top-reservetitle">作成日</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12 mb-4">
            <div class="title-box">
                <h5>ランダム記事</h5>
            </div>
            <div class="box-regular ">
            </div>
        </div>
    </div>
</div>
@endsection