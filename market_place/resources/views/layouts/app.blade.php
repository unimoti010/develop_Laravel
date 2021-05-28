<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <!-- リンクの指定をどうするか -->
            <a class="brand" href="/">{{ config('app.name')}}</a>
        </div>
        @auth
        <dt>
            ようこそ{{Auth::user()->name}}さん
        </dt>
        @endauth
    </header>
    <main>
        <div class="container">
        @yield('content')
        </div>
    </main>
</body>
</html>