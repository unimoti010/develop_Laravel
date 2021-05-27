@extends('layouts.app')

@section('content')
<h1>購入した商品</h1>
<table class="table">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>価格</th>
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td><a href="{{route('textbooks.show', $textbook->id)}}">{{$textbook->title}}</a></td>
                <td>{{ $textbook->author }}</td>
                <td>{{ $textbook->price }}</td>
                @can('isAdmin')
                <td>
                    <a href="{{ route('textbooks.edit', $textbook) }}">編集</a>
                </td>
                @endcan
            </tr>
        @endforeach
    </tbody>
</table>

<p>お買い上げありがとうございました</p>
    <a href="{{route('purchase_histories.index')}}">購入履歴へ</a>
@endsection