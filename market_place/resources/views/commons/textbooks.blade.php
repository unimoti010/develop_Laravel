<table class="table">
    <thead>
        <tr>
            <th>教科書名</th>
            <th>カテゴリ</th>
            <th>著者名</th>
            <th>出版社</th>
            <th>価格</th>
            <th>本の状態</th>
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td>{{ $textbook->title }}</td>
                <td>{{ $textbook->category }}</td>
                <td>{{ $textbook->author }}</td>
                <td>{{ $textbook->publisher }}</td>
                <td>{{ $textbook->price }}</td>
                <td>{{ $textbook->states }}</td>
                <td>
                    <a href="{{ route('textbooks.edit', $textbook) }}">編集</a>
                </td>
                <td>
                    <a href="{{ route('textbooks.destroy', $textbook) }}">削除</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}
