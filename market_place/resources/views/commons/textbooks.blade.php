<table class="table">
    <thead>
        <tr>
            <th>タイトル</th>
            {{-- <th>カテゴリ</th> --}}
            <th>著者</th>
            {{-- <th>出版社</th> --}}
            <th>価格</th>
            {{-- <th>状態</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($textbooks as $textbook)
            <tr>
                <td>
                    <a href="{{route('textbooks.show', $textbook->id)}}">{{$textbook->title}}
                    </a>
                </td>
                {{-- <td>{{ $textbook->category}}</td> --}}
                <td>{{ $textbook->author}}</td>
                {{-- <td>{{ $textbook->publisher}}</td> --}}
                <td>{{ $textbook->price}}</td>
                {{-- <td>{{ $textbook->state}}</td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
    {{-- {{ $textbooks->links() }} --}}