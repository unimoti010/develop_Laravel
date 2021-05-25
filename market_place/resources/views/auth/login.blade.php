@extends('layouts.app')

@section('content')
<h1>ログイン</h1>
@include('commons/flash')
<form action="{{ route('login') }}" method="post">
    @csrf
    <p>
        <label>メールアドレス<br>
        <input type="email" name="email" value="{{ old('email') }}"></label>
    </p>

    <p>
        <label>パスワード<br>
        <input type="password" name="password" value=""></label>
    </p>

    <p>
        <button type="submit">ログイン</button>
    </p>
    <p>または</p>
    <p>
        <a href="{{ route('register') }}">会員登録</a>
    </p>
</form>
@endsection