@extends('layouts.app')

@section('content')

{{-- 管理者のみ --}}
@can('isAdmin')
<p><a href="{{ route('admin.allUsers') }}">会員一覧</a></p>
<p><a href="{{ route('admin.allTextbooks') }}">教科書一覧</a></p>
@endcan

{{-- ログイン前のみ --}}
@guest
<style>
    ul {
        font-size: 140%;
        display: flex;
        list-style: none;
        margin-left: auto;
        margin-right: auto; 
    }
    li {
        color: #ffffff;
        text-align: center;
        border: solid 3px #ffffff;
        padding: 10px 30px;
        color: #ffffff
    }
    
</style>
<div>
  <ul>
    <li><a href="{{ route('register') }}">新規会員登録</a></li>
    <li><a href="{{ route('login') }}">ログイン</a></li>
  </ul>
</div>
<video autoplay muted playsinline src="/images/textbook3-1.mp4" loop autoplay muted
 width="1200px" height="500px"></video>
@endguest

@auth
<p><a href="{{ route('users.edit', $user) }}">会員情報変更</a></p>
<p><a href="{{ route('textbooks.index') }}">教科書一覧</a></p>
<p><a href="{{ route('textbooks.create') }}">教科書登録</a></p>
<p><a href="{{ route('register_histories.index') }}">登録履歴</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
@endauth

@endsection