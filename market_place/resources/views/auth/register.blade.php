@extends('layouts.app')

@section('content')

    <h1>会員登録</h1>
    @include('commons/flash')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <p>
            <label class="form-label">名前 <span class="badge bg-danger">必須</span></label><br>
            <input type="text" class="form-control" name="name" s value="{{ old('name') }}" placeholder="例：山田太郎">
        </p>
        <p>
            <label class="form-label">電話番号 <span class="badge bg-danger">必須</span></label><br>
            <input type="tel" class="form-control" name="tel" s value="{{ old('tel') }}" placeholder="例：000-0000-0000">
        </p>
        <p>
            <label class="form-label">住所 <span class="badge bg-danger">必須</span></label><br>
            <textarea type="address" class="form-control" name="address" rows="3"
                placeholder="例：東京都新宿区">{{ old('address') }}</textarea>
        </p>
        <p>
            <label class="form-label">メールアドレス <span class="badge bg-danger">必須</span></label><br>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="例：xxx@xxx.xxx">
        </p>
        <p>
            <label class="form-label">パスワード <span class="badge bg-danger">必須</span></label><br>
            <input type="password" class="form-control" name="password" value="" placeholder="8文字以上で入力">
        </p>
        <p>
            <label class="form-label">パスワード確認 <span class="badge bg-danger">必須</span></label><br>
            <input type="password" class="form-control" name="password_confirmation" value="" placeholder="パスワードを再度入力">
        </p>
        <p>
            <label class="form-label">ユーザの種類</label><br>
            <select class="form-control" name="admin">
                <option value="1">会員</option>
                <option value="0">管理者</option>
            </select>
        </p>

        <button type="submit" class="btn btn-primary border">会員登録</button><br><br>
        <span> または </span>
        <a href="{{ route('login') }}" class="btn btn-secondary border">会員登録</a>
    </form>
@endsection
