@extends('layouts.app')

@section('content')
<h1>詳細情報</h1>
<form action="purchase.blade.php" method="GET">
    {{-- 送信先のパスどうする --}}
    @csrf
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
    <a href="{{ route('textbooks.destroy', $textbook) }}" onclick="deleteTextbook()">削除</a>

{{-- 削除の実行 --}}
<form action="{{ route('textbooks.destroy',$textbook) }}" id="delete-form">
    @csrf
    @method('delete')
</form>

    <script type="text/javascript">
        function deleteTextbook() {
            event.preventDefault();
            if(window.confirm('本当に削除しますか？')) {
                document.getElementById('delete-form').submit();
            }
        }
</p>

@endsection