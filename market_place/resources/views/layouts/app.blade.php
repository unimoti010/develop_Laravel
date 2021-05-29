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

</head>
<style>
    .headerNavBtn {
        text-align: center;
        height: 3em;
        line-height: 2em;
        color: #5F5F5F;
        font-size: 16px;
    }

    headerNavBtn:hover {
        background: #EEE;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <ul class="navbar-nav">
                    @if (Auth::check())
                    <li class="nav-item">
                        ようこそ、{{Auth::user()->name}}さん
                    </li>

                    <div class="d-flex">
                        <li class="nav-item d-flex">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-warning" value="ログアウト">
                            </form>
                        </li>

                    </div>
                    @else
                    <li class="nav-link">
                        ようこそ、ゲストさん
                    </li>
                    <div class="d-flex">
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">新規会員登録</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">ログイン</a>
                        </li>
                    </div>
                    @endif
                </ul>
            </div>
        </nav>

        <nav class="navbar navbar-dark app-main">
            <div class="container">
                <a class="btn btn-outline-dark logo" href="/">{{ config('app.name')}}</a>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @can('isAdmin')
                <div class="col headerNavBtn">
                    <a href="{{ route('admin.allUsers') }}">会員一覧</a>
                </div>
                <div class="col headerNavBtn">
                    <a href="{{ route('admin.allTextbooks') }}">教科書一覧</a>
                </div>
                @endcan

                @auth
                @cannot('isAdmin')
                <div class="col headerNavBtn">
                    <a href="{{ route('textbooks.index') }}">教科書一覧</a>
                </div>
                <div class="col headerNavBtn">
                    <a href="{{ route('textbooks.create') }}">教科書登録</a>
                </div>
                <div class="col headerNavBtn">
                    <a href="{{ route('register_histories.index') }}">登録履歴</a>
                </div>
                <div class="col headerNavBtn">
                    <a href="{{ route('purchase_histories.index') }}">購入履歴</a>
                </div>
                @endcannot
                @endauth
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>