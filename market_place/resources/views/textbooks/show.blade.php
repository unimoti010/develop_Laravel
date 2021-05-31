@extends('layouts.app')

@section('content')
    <h1 data-en="Book">詳細情報</h1>

    @cannot('isAdmin')
        @if ($register_history->user_id != Auth::id())
            <form action="{{ route('textbooks.purchaseTable') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $textbook->id }}" name="id" />

                <button type="submit" class="btn btn-success">購入</button>
            </form>
        @endif
    @endcannot

    <dl class="faq">
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

    @if ($register_history->user_id == Auth::id() || Gate::allows('isAdmin'))
        <div class="btn-group" role="group">
            <a href="{{ route('textbooks.edit', $textbook) }}" class="btn btn-primary border-start border-end">編集</a>
            <a href="{{ route('textbooks.destroy', $textbook) }}" class="btn btn-secondary border-start border-end" onclick="deleteTextbook()">削除</a>
        </div>
    @endif

    {{-- 削除の実行 --}}
    <form action="{{ route('textbooks.destroy', $textbook) }}" method="post" id="delete-form">
        @csrf
        @method('delete')
        <input type="hidden" name="textbook_id" value="{{ $textbook->id }}">
    </form>

    <script type="text/javascript">
        function deleteTextbook() {
            event.preventDefault();
            if (window.confirm('本当に削除しますか？')) {
                document.getElementById('delete-form').submit();
            }
        }

    </script>
    </p>

@endsection
