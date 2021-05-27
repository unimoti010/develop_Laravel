<table class="table">
    <thead>
        <tr>
            <th>会員名</th>
            <th>住所</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}">編集</a>
                </td>
                <td>
                    <a href="" onclick="deleteUser()">削除</a>
                </td> 

                {{-- 削除の実行 --}}
                <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-form">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                </form>

                    <script type="text/javascript">
                        function deleteUser() {
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
{{ $users->links() }}