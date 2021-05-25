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
                <td>
                    <a href="{{route('textbooks.show', $textbook->id)}}">{{$textbook->title}}
                    </a>
                </td>
                <td>{{ $textbook->author}}</td>
                <td>{{ $textbook->price}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    {{-- {{ $textbooks->links() }} --}}