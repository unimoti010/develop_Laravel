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
                <td>{{ $textbook->title }}</td>
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
{{ $textbooks->appends(Request::all())->links() }}
