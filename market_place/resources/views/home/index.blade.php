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

{{-- ログイン後 --}}
@auth
<style>
    body {
        font-size: 120%;
        background-image: url("images/textbook2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y:120px ;
    }
    p{
        padding-top: 20px:
        line-height: 160%;
    }
</style>
<p><a href="{{ route('users.edit', $user) }}">会員情報変更</a></p>
@cannot('isAdmin')
<p><a href="{{ route('textbooks.index') }}">教科書一覧</a></p>
<p><a href="{{ route('textbooks.create') }}">教科書登録</a></p>
<p><a href="{{ route('register_histories.index') }}">登録履歴</a></p>
<p><a href="{{ route('purchase_histories.index') }}">購入履歴</a></p>
@endcannot
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
@endauth

@endsection