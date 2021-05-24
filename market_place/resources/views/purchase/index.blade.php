@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>価格</th>
            <th>個数</th>
            <th>購入日時</th>

        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td>{{$textbook->title}}</td>
                <td>{{ $textbook->price}}</td>
                <td>{{ $textbook->withCount()}}</td>
                {{-- 個数を出すメソッド？そもそも一冊の本は複数冊ある？ --}}
                <td>{{ $textbook->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}        

@endsection