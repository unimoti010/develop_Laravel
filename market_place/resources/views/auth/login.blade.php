@extends('layouts.app')

@section('content')
<h1>ログイン</h1>
@include('commons/flash')
<form action="{{ route('login') }}" method="post">
    @csrf
    <p>
        <label class="form-label">メールアドレス<br>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}"></label>
    </p>

    <p>
        <label class="form-label">パスワード<br>
        <input type="password" class="form-control" name="password" value=""></label>
    </p>

    <button type="submit" class="btn btn-primary border">ログイン</button><br><br>
    <span> または </span>
    <a href="{{ route('register') }}" class="btn btn-secondary border">会員登録</a>
</form>
@endsection