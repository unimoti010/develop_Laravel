@extends('layouts.app')

@section('content')

{{-- ログイン前のみ --}}
@guest
<video class="video1home" autoplay muted playsinline src="/images/textbook3-1.mp4" loop></video>
<div class="beforelogin">
    <p>商品のご登録・ご購入には、<a href="{{ route('register') }}">会員登録</a>が必要です</p>
    <p>既にアカウントをお持ちの方は、<a href="{{ route('login') }}">こちら</a>から</p>
</div>
@endguest

{{-- ログイン後 --}}
@auth

<div class="video2home">
    <img src="/images/smartphone.jpg" width="350px" height="197px">
    <video autoplay muted playsinline src="/images/textbookhome1.mp4" loop width="350px"></video>
    <img src="/images/library1.jpg" width="350px" height="197px">
</div>

@endauth

@endsection