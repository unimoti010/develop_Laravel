@extends('layouts.app')

@section('content')
@if (Auth::check())
<!--ログイン後のホーム画面-->
<p><a href="{{ route('users.edit', $user) }}">会員情報変更</a></p>


<!--あとでリンク先を追加する-->
<p><a href="">教科書登録</a></p>

<p><a href="">登録履歴</a></p>

<p><a href="">購入履歴</a></p>


{{--p.126参照--}}
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <a href="{{ route('logout') }}" onclick="logout()"><input type="submit" value="ログアウト"></a> 
</form>
<script>
    function logout(){
        event.preventDefault();
        if(window.confirm('ログアウトしますか？')){
            document.getElementById('logout-form').submit();
            window.location.href = "http://localhost:8000/home";
            //ログイン前ホームに遷移
        }
    }

</script>
@endif

@endsection