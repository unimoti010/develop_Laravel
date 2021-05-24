@extends('layouts.app')

@section('content')
<h1>会員情報の変更</h1>
{{-- @include('commons/flash') --}}
<form action="{{-- route('users.update') --}}" method="post">
    @method('put')
    @csrf
    <p>
        <label>名前</label><br>
        <input type="text" name="name" s value="{{ old('name') }}">
    </p>
    <p>
        <label>電話番号</label><br>
        <input type="tel" name="tel" s value="{{ old('tel') }}">
    </p>
    <p>
        <label>住所</label><br>
        <input type="address" name="address" s value="{{ old('address') }}">
    </p>
    <p>
        <label>メールアドレス</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
    </p>
    <p>
        <label>パスワード</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <label>パスワード確認</label><br>
        <input type="password" name="password_confirmation" value="">
    </p>
    <p>
        <a href="{{ route('home') }}">変更</a> <!--あとで編集画面に戻るリンクに変更する-->
    </p>
    <p>
        <!--ボタンをクリックするとunsubscribe.blade.phpに遷移する（遷移先でポップアップを表示）-->
        <a href="{{-- route('unsubscribe') --}}">退会する</a>

    </p>
</form>


@endsection