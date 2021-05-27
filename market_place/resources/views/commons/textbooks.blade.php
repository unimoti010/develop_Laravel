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
                <td>
                    <a href="{{ route('textbooks.edit', $textbook) }}">編集</a>
                </td>
                <td>
                    <a href="{{ route('textbooks.destroy', $textbook) }}" onclick="deleteTextbook()">削除</a>
                </td>

                {{-- 削除の実行 --}}
                <form action="{{ route('textbooks.destroy',$textbook) }}" method="post" id="delete-form">
                    @csrf
                    @method('delete')
                </form>

                    <script type="text/javascript">
                        function deleteTextbook() {
                            event.preventDefault();
                            if (window.confirm('本当に削除しますか？')) {
                                document.getElementById('delete-form').submit();
                            }
                        }
                    </script>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $textbooks->appends(Request::all())->links() }}
