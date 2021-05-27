@extends('layouts.app')

@section('content')
<h1>登録履歴</h1>

<!-- 登録履歴一覧をregister_historiesテーブルから表示 -->
<table>
    <thead>
        <tr>
            <th>題名</th>
            <th>価格</th>
            <th>登録日時</th>
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
         <tr>
         <td><a href="{{route('register_histories.show', $textbook->id)}}">{{$textbook->title}}</a></td>
            <td>{{ $textbook->price }}</td> 
            <td>{{ $textbook->created_at }}</td> 
         </tr>
         @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}

@endsection