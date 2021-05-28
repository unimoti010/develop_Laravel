@extends('layouts.app')

@section('content')

{{-- 管理者のみ --}}
@can('isAdmin')
<p><a href="{{ route('admin.allUsers') }}" class="btn btn-outline-primary">会員一覧</a></p>
<p><a href="{{ route('admin.allTextbooks') }}" class="btn btn-outline-primary">教科書一覧</a></p>
@endcan

{{-- ログイン前のみ --}}
@guest
<ul class="beforelogin">
    <li><a href="{{ route('register') }}" class="btn btn-outline-primary">新規会員登録</a></li>
    <li><a href="{{ route('login') }}" class="btn btn-outline-primary">ログイン</a></li>
</ul>
<video autoplay muted playsinline src="/images/textbook3-1.mp4" loop autoplay muted
 width="1200px" height="500px"></video>
@endguest

{{-- ログイン後 --}}
@auth
<p><a href="{{ route('users.edit', $user) }}" class="btn btn-outline-primary">会員情報変更</a></p>
@cannot('isAdmin')
<p><a href="{{ route('textbooks.index') }}" class="btn btn-outline-primary">教科書一覧</a></p>
<p><a href="{{ route('textbooks.create') }}" class="btn btn-outline-primary">教科書登録</a></p>
<p><a href="{{ route('register_histories.index') }}" class="btn btn-outline-primary">登録履歴</a></p>
<p><a href="{{ route('purchase_histories.index') }}" class="btn btn-outline-primary">購入履歴</a></p>
@endcannot
<video autoplay muted playsinline src="/images/study1.mp4" loop autoplay muted
 width="400px"></video>
<video autoplay muted playsinline src="/images/textbook1.mp4" loop autoplay muted
 width="400px"></video>


<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" class="btn btn-warning" value="ログアウト">
@endauth

@endsection