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
                <td>{{$textbook->title}}</td>
                <td>{{ $textbook->author }}</td>
                <td>{{ $textbook->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<p>お買い上げありがとうございました</p>
    <a href="{{route('purchase_histories.index')}}" class="btn btn-secondary">購入履歴へ</a>
@endsection