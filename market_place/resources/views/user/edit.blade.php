@extends('layouts.app')

@section('content')
<h1>会員情報の変更</h1>
@include('commons/flash')
<form action="{{ route('users.update', $user) }}" method="post">
    @csrf
    @method('put')
    <p>
        <label>名前</label><br>
        <input type="text" name="name"  value="{{ old('name', $user->name) }}" placeholder="例：山田太郎">
    </p>
    <p>
        <label>電話番号</label><br>
        <input type="tel" name="tel" value="{{ old('tel', $user->tel) }}" placeholder="例：000-0000-0000">
    </p>
    <p>
        <label>住所</label><br>
        <input type="address" name="address" value="{{ old('address', $user->address) }}" placeholder="例：東京都新宿区">
    </p>
    <p>
        <label>メールアドレス</label><br>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="例：xxx@xxx.xxx">
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
        <button type="submit">変更する</button>
    </p>
</form>
    <p>
    <!--退会処理・・・クリックすると確認のポップアップを表示-->
    <a href="" onclick="deleteUser()">退会する</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-form1">
        @csrf
        @method('delete')
        <input type="hidden" name="user_id" value="{{ $user->id }}">
    </form>     
    </p>
    <script type="text/javascript">
        function deleteUser(){
            event.preventDefault();
            if(window.confirm("本当に退会しますか？")){
                document.getElementById("delete-form1").submit();
                alert("退会が完了しました。\nご利用ありがとうございました。");
                // window.location.href = "http://localhost:8000/home";                
            } else {
            window.alert("退会をキャンセルしました。");
            }
        }
    </script>              
    

@endsection