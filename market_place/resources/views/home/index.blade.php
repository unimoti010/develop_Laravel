@extends('layouts.app')

@section('content')

{{-- 管理者のみ --}}
@can('isAdmin')
<p><a href="{{ route('admin.allUsers') }}">会員一覧</a></p>
<p><a href="{{ route('admin.allTextbooks') }}">教科書一覧</a></p>
@endcan

{{-- ログイン前のみ --}}
@guest
<p><a href="{{ route('register') }}">新規会員登録</a></p>
<p><a href="{{ route('login') }}">ログイン</a></p>
@endguest

@auth
<p><a href="{{ route('textbooks.index') }}">教科書一覧</a></p>
<p><a href="{{ route('textbooks.create') }}">教科書登録</a></p>
<p><a href="{{ route('register_histories.index') }}">登録履歴</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
@endauth

@endsection