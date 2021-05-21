@extends('layouts.app')

@section('content')
<!--ログイン後のホーム画面-->
<p><a href="{{ route('user.edit') }}">会員情報変更</a></p>
<!--あとでリンク先を追加する
<p><a href="{{ route('') }}"></a>教科書登録</p>

<p><a href="{{ route('') }}">登録履歴</a></p>

<p><a href="{{ route('') }}">購入履歴</a></p>
-->

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">     <!--パス追加-->
</form>
@endsection