@extends('layouts.app')

@section('content')
<!--ログイン前のホーム画面-->
<p><a href="{{ route('auth/register') }}">新規会員登録</a></p>  <!--authフォルダのパスの書き方-->
<p><a href="{{ route('auth/login') }}">ログイン</a></p>

<!--教科書一覧を表示-->


@endsection