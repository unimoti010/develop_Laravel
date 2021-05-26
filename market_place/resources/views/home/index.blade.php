@extends('layouts.app')

@section('content')
<!--ログイン前のホーム画面-->
<p><a href="{{ route('register') }}">新規会員登録</a></p>
<p><a href="{{ route('login') }}">ログイン</a></p>

{{-- ブラウザ確認するためのものなので実際は不要 --}}
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
    
</form>
{{-- <a href="{{ route('textbooks.index') }}">教科書一覧</a>
<a href="{{ route('textbooks.create') }}">教科書登録</a>
<a href="{{ route('register_histories.index') }}">登録履歴</a> --}}
@endsection