@extends('layouts.app')

@section('content')

{{-- 管理者のみ --}}
@can('isAdmin')
<p><a href="{{ route('admin.allUsers') }}" class="btn btn-outline-primary">会員一覧</a></p>
<p><a href="{{ route('admin.allTextbooks') }}" class="btn btn-outline-primary">教科書一覧</a></p>
@endcan

{{-- ログイン前のみ --}}
@guest
<p><a href="{{ route('register') }}" class="btn btn-outline-primary">新規会員登録</a></p>
<p><a href="{{ route('login') }}" class="btn btn-outline-primary" >ログイン</a></p>
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
    <input type="submit" class="btn btn-outline-primary" value="ログアウト">
@endauth

@endsection