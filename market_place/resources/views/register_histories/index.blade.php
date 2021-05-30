@extends('layouts.app')

@section('content')
<h1>登録履歴</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>題名</th>
            <th>価格</th>
            <th>登録日時</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
        <tr>
            <td>{{ $textbook->title }}</td>
            <td>{{ $textbook->price }}</td>
            <td>{{ $textbook->created_at }}</td>

            <td>
                <a href="{{ route('textbooks.show', $textbook->id) }}" class="btn btn-primary">詳細</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}

@endsection