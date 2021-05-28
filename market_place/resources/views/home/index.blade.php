@extends('layouts.app')

@section('content')

{{-- 管理者のみ --}}
@can('isAdmin')
<p><a href="{{ route('admin.allUsers') }}" class="btn btn-outline-primary">会員一覧</a></p>
<p><a href="{{ route('admin.allTextbooks') }}" class="btn btn-outline-primary">教科書一覧</a></p>
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
    <li><a href="{{ route('register') }}" class="btn btn-outline-primary">新規会員登録</a></li>
    <li><a href="{{ route('login') }}" class="btn btn-outline-primary">ログイン</a></li>

  </ul>
</div>
<video autoplay muted playsinline src="/images/textbook3-1.mp4" loop autoplay muted
 width="1200px" height="500px"></video>
@endguest

@auth
<p><a href="{{ route('users.edit', $user) }}" class="btn btn-outline-primary">会員情報変更</a></p>
@cannot('isAdmin')
<p><a href="{{ route('textbooks.index') }}" class="btn btn-outline-primary">教科書一覧</a></p>
<p><a href="{{ route('textbooks.create') }}" class="btn btn-outline-primary">教科書登録</a></p>
<p><a href="{{ route('register_histories.index') }}" class="btn btn-outline-primary">登録履歴</a></p>
<p><a href="{{ route('purchase_histories.index') }}" class="btn btn-outline-primary">購入履歴</a></p>
@endcannot

<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" class="btn btn-warning" value="ログアウト">
@endauth

@endsection