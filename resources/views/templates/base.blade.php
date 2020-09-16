<!DOCTYPE html>
<html lang="ja">
<head>
    <title>MyWiki｜マイウィキ</title>
    <meta charset="utf-8">

    <!-- この指定をするとInternet Explorerを使用している人が最新バージョンでサイトを表示する -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- bootstrap利用のリンク -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Font Awesomeの利用のための記述 アイコンデザイン関連 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

</head>
<body>
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>

<!-- bootstrap利用のためのリンク -->
<script src="/js/jquery-3.5.1.js"></script>
<script src="/js/bootstrap.bundle.js"></script>

</html>