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
            </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}