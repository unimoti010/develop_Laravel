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
                {{-- <td>{{ $textbook->category }}</td> --}}
                <td>{{ $textbook->author }}</td>
                {{-- <td>{{ $textbook->publisher }}</td> --}}
                <td>{{ $textbook->price }}</td>
                {{-- <td>{{ $textbook->states }}</td> --}}
                @can('isAdmin')
                <td>
                    <a href="{{ route('textbooks.edit', $textbook) }}">編集</a>
                </td>
                <td>
                    <a href="{{ route('textbooks.destroy', $textbook) }}">削除</a>
                </td>
                @endcan
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->links() }}
