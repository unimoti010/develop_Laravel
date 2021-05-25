@extends('layouts.app')

@section('content')
<h1>登録履歴</h1>

<!-- 登録履歴一覧をregister_historiesテーブルから表示 -->
<table>
    <thead>
        <tr>
            <th>投稿者</th>
            <th>タイトル</th>
            <th>著者</th>
            <th>出版社</th>
        </tr>
    </thead>
    <tbody>
        @foreach($register_histories as $register_history)
         <tr>
            <td>
                <!-- register_historiesコントローラに渡して、詳細を表示 -->
             <!--   <a href="{{ route('textbook.show', $register_history->textbook_id) }}">
                    {{ $register_history->textbook->title }}
                </a>-->
            </td>
            <td>{{ $register_history->textbook->price }}</td>
            <td>{{ $register_history->created_at }}</td>
         </tr>
         @endforeach
    </tbody>
</table>
{{ $register_histories->links() }}