<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<style>
    body {
        background-color: #f5f5f5;
    }

    .app-main {
        background-image: url('/images/header-bg.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .logo {
        margin: 0.2em auto;
        display: block;
    }

    a {
        text-decoration: none;
    }

</style>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('/js/test.js') }}"></script>

    <header>

        <nav class="navbar navbar-expand-lg bg-white border border-2 p-1">
            <div class="container">
                @if (Auth::check())
                    <span class="welcome-name">ようこそ、{{ Auth::user()->name }}さん</span>
                    <div class="d-flex">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-outline-secondary" value="ログアウト">
                        </form>
                    </div>
                @else
                    <span class="welcome-name">ようこそ、ゲストさん</span>
                    <div class="d-flex btn-group" role="group">
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary">新規会員登録</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">ログイン</a>
                    </div>
                @endif
            </div>
        </nav>

        <nav class="navbar navbar-dark app-main">
            <div class="container">
                <a class="btn btn-outline-light logo" href="/">
                    <h2>{{ config('app.name') }}</h2>
                </a>
            </div>
        </nav>

    </header>
    @auth
        <div class="sticky-top bg-white border border-2">
            <div class="container">
                <div class="row">
                    @can('isAdmin')
                        <div class="col btn border-start border-end">
                            <a href="{{ route('admin.allUsers') }}" class="text-muted">会員一覧</a>
                        </div>
                        <div class="col btn border-start border-end">
                            <a href="{{ route('admin.allTextbooks') }}" class="text-muted">教科書一覧</a>
                        </div>
                    @endcan
                    @cannot('isAdmin')
                        <div class="col btn border-start border-end">
                            <a href="{{ route('textbooks.index') }}" class="text-muted">教科書一覧</a>
                        </div>
                        <div class="col btn border-start border-end">
                            <a href="{{ route('textbooks.create') }}" class="text-muted">教科書登録</a>
                        </div>
                        <div class="col btn border-start border-end">
                            <a href="{{ route('register_histories.index') }}" class="text-muted">登録履歴</a>
                        </div>
                        <div class="col btn border-start border-end">
                            <a href="{{ route('purchase_histories.index') }}" class="text-muted">購入履歴</a>
                        </div>
                    @endcannot
                </div>
            </div>
        </div>
    @endauth
    <main>
        <div class="container">
            @yield('content')
        </div>
        <div class="centerer">
            <h1>Just Some More</h1>
            <h1>Button Hover Effects</h1>
            <h4>By: <a href="http://kylebrumm.com" target="_blank">Kyle Brumm</a></h4>

            <div class="wrap">
                <a class="btn-0" href="#">Swipe</a>
                <a class="btn-1" href="#">Diagonal Swipe</a>
                <a class="btn-1-2" href="#">Double Swipe</a>
                <a class="btn-2" href="#">Diagonal Close</a>
                <a class="btn-3" href="#"><span>Zoning In</span></a>
                <a class="btn-4" href="#"><span>4 Corners</span></a>
                <a class="btn-5" href="#">Slice</a>
            </div>
            <div class="wrap">
                <a class="btn-6" href="#">Position Aware<span></span></a>
                <a class="btn-7" href="#"><span>Alternate</span></a>
                <a class="btn-8" href="#">Smoosh</a>
                <a class="btn-9" href="#"><span>Vertical Overlap</span></a>
                <a class="btn-10" href="#"><span>Horizontal Overlap</span></a>
                <a class="btn-11" href="#">Collision</a>
            </div>
        </div>
        @yield('guest')
        @yield('home')
    </main>
</body>

</html>
