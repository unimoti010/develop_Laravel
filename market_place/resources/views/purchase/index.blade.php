@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>価格</th>
            <th>購入日時</th>

        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td>{{$textbook->title}}</td>
                <td>{{ $textbook->price}}</td>
                <td>{{ $textbook->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}        

@endsection