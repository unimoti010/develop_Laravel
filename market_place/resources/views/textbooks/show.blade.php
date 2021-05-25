@extends('layouts.app')

@section('content')
<h1>詳細情報</h1>
{{-- <form action="{{ route('purchase_histories.notification') }}" method="post">  --}}
<form action="{{ route('textbooks.purchaseTable') }}" method="post">
    @csrf
    <input type="hidden" value="{{$textbook->id}}" name="id"/>

    <button type="submit">購入</button>
</form>

<dl>
    <dt>タイトル</dt>
    <dd>{{ $textbook->title }}</dd>
    <dt>カテゴリ</dt>
    <dd>{{ $textbook->category }}</dd>
    <dt>著者</dt>
    <dd>{{ $textbook->author }}</dd>
    <dt>出版社</dt>
    <dd>{{ $textbook->publisher }}</dd>
    <dt>価格</dt>
    <dd>{{ $textbook->price }}</dd>
    <dt>状態</dt>
    <dd>{{ $textbook->state }}</dd>
</dl>

<p>
    <a href="{{ route('textbooks.edit', $textbook) }}">編集</a>
    |
    <a href="{{ route('textbooks.destroy', $textbook) }}">削除</a>
</p>

@endsection