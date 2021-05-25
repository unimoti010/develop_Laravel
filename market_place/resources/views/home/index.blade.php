@extends('layouts.app')

@section('content')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">
</form>
<a href="{{ route('textbooks.index') }}">教科書一覧</a>
<a href="{{ route('textbooks.create') }}">教科書登録</a>
<a href="{{ route('register_histories.index') }}">登録履歴</a>
@endsection