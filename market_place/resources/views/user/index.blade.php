@extends('layouts.app')

@section('content')
<!--ログイン後のホーム画面-->
<p><a href="{{ route('users.edit') }}">会員情報変更</a></p>
<!--あとでリンク先を追加する
<p><a href="{{ route('') }}"></a>教科書登録</p>

<p><a href="{{ route('') }}">登録履歴</a></p>

<p><a href="{{ route('') }}">購入履歴</a></p>
-->

{{--p.126参照--}}
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <a href="{{ route('logout') }}" onclick="logout()"><input type="submit" value="ログアウト"></a> 
</form>
<script>
    function logout(){
        event.preventDefault();
        if(window.confirm('ログアウトしますか？')){
            document.getElementById('logout-form').submit();
        }
    }

</script>
@endsection