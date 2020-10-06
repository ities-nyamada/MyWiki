@extends('templates.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mt-5">
                <h5 class="card-header text-center text-white bg-main-color"></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 offset-3">
                            登録が完了しました。
                        </div>
                        <div class="col-6 offset-3">
                        <a href="/members/create">トップページへ移動</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection