<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- <link rel="stylesheet" href="/css/main.css"> -->
</head>
<body>
    <header>
        <div class="container">
            <a class="brand" href="/">{{ config('app.name')}}</a>
        </div>
    </header>
    <main>
        <div class="container">
        @yield
        </div>
    </main>
</body>
</html>