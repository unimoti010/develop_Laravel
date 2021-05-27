@extends('layouts.app')

@section('content')

<h1>会員登録</h1>
 @include('commons/flash') 
<form action="{{ route('register') }}" method="post">
    @csrf
    <p>
        <label>名前</label><br>
        <input type="text" name="name" s value="{{ old('name') }}" placeholder="例：山田太郎">
    </p>
    <p>
        <label>電話番号</label><br>
        <input type="tel" name="tel" s value="{{ old('tel') }}" placeholder="例：000-0000-0000">
    </p>
    <p>
        <label>住所</label><br>
        <input type="address" name="address" s value="{{ old('address') }}" placeholder="例：東京都新宿区">
    </p>
    <p>
        <label>メールアドレス</label><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="例：xxx@xxx.xxx">
    </p>
    <p>
        <label>パスワード</label><br>
        <input type="password" name="password" value="" placeholder="8文字以上で入力">
    </p>
    <p>
        <label>パスワード確認</label><br>
        <input type="password" name="password_confirmation" value="" placeholder="パスワードを再度入力">
    </p>
    <p>
        <label>ユーザの種類</label><br>
        <select name="admin">
            <option value="1">会員</option>
            <option value="0">管理者</option>
        </select>
    </p>
    <p>
        <button type="submit">会員登録</button>
    </p>
    <p>または</p>
    <p>
        <a href="{{ route('login') }}">ログイン</a>
    </p>
</form>
@endsection
