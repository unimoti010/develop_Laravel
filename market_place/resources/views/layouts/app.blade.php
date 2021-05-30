<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/dldtdd.css">
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
        margin: 0.5em auto;
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
                <a class="btn btn-outline-dark logo" href="/">{{ config('app.name') }}</a>
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
        @endauth
    </div>
    <main>
        <div class="container">
            @yield('content')
        </div>
        @yield('guest')
        @yield('home')
    </main>
</body>

</html>
