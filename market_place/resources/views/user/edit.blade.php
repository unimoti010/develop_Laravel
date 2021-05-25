@extends('layouts.app')

@section('content')
<h1>会員情報の変更</h1>
@include('commons/flash')
{{ <form action="{{ route('users.update', auth()->user()) }}" method="post"> }}
    @csrf
    @method('put')
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
        <button type="submit">変更する</button>
    </p>

    <p>
    <!--退会処理・・・クリックすると確認のポップアップを表示-->
    <a href="{{ route('users.destroy', $user) }}" onclick="deleteUser()">退会する</a>
    <form action="{{ route('users.destroy', $user) }}" method="post"  id="delete-form">
        @csrf
        @method('delete')
    </form>     
    <script>
        function deleteUser(){
            if(window.confirm("本当に退会しますか？")){
                document.getElementById('delete-form').submit();
                alert("退会が完了しました。\nご利用ありがとうございました。");
                window.location.href = "http://localhost:8000/home";                
            } else {
            window.alert("退会をキャンセルしました。");
            }
        }
    </script>              
    </p>
</form>
@endsection