<table class="table table-striped">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>価格</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td>{{ $textbook->title }}</td>
                <td>{{ $textbook->author }}</td>
                <td>{{ $textbook->price }}</td>
                <td>
                    <a href="{{ route('textbooks.show', $textbook->id) }}" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}
