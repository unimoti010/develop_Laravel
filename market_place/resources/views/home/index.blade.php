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
<<<<<<< HEAD

<!--教科書一覧を表示-->


=======
<a href="{{ route('textbooks.index') }}">教科書一覧</a>
<a href="{{ route('textbooks.create') }}">教科書登録</a>
<a href="{{ route('register_histories.index') }}">登録履歴</a>
>>>>>>> 2283cb15c13d85ecac751d69602b40a140de13f7
@endsection