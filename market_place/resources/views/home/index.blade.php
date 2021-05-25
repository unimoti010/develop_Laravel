@extends('layouts.app')

@section('content')
<!--ログイン前のホーム画面-->
<p><a href="{{ route('register') }}">新規会員登録</a></p>
<p><a href="{{ route('login') }}">ログイン</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
</form>

<!--教科書一覧を表示-->


@endsection