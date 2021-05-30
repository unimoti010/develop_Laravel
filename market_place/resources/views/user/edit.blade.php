@extends('layouts.app')

@section('content')
<h1>会員情報の変更</h1>
@include('commons.flash')
<form action="{{ route('users.update', $user) }}" method="post">
    @csrf
    @method('put')
    <p>
        <label>名前 <span class="badge bg-danger">必須</span></label><br>
        <input type="text" class="form-control" name="name"  value="{{ old('name', $user->name) }}" placeholder="例：山田太郎">
    </p>
    <p>
        <label>電話番号 <span class="badge bg-danger">必須</span></label><br>
        <input type="tel" class="form-control" name="tel" value="{{ old('tel', $user->tel) }}" placeholder="例：000-0000-0000">
    </p>
    <p>
        <label>住所 <span class="badge bg-danger">必須</span></label><br>
        <textarea type="address" class="form-control" name="address" rows="3" placeholder="例：東京都新宿区">{{ old('address', $user->address) }}</textarea>
    </p>
    <p>
        <label>メールアドレス <span class="badge bg-danger">必須</span></label><br>
        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="例：xxx@xxx.xxx">
    </p>
    <p>
        <label>パスワード <span class="badge bg-danger">必須</span></label><br>
        <input type="password" class="form-control" name="password" value="" placeholder="8文字以上で入力">
    </p>
    <p>
        <label>パスワード確認 <span class="badge bg-danger">必須</span></label><br>
        <input type="password" class="form-control" name="password_confirmation" value="" placeholder="パスワードを再度入力">
    </p>
    <p>
        <button type="submit">変更する</button>
    </p>
</form>
    <p>
        @can('isAdmin')
            <a href="" onclick="deleteUser()">削除する</a>
        @else
            <a href="" onclick="deleteUser()">退会する</a>
        @endcan
        <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-form1">
            @csrf
            @method('delete')
            <input type="hidden" name="user_id" value="{{ $user->id }}">
        </form>     
    </p>
    @can('isAdmin')
    <script type="text/javascript">
        function deleteUser(){
            event.preventDefault();
            if(window.confirm("本当に削除しますか？")){
                document.getElementById("delete-form1").submit();
                alert("削除が完了しました。");      
            } else {
            window.alert("削除をキャンセルしました。");
            }
        }
    </script>
    @else
    <script type="text/javascript">
        function deleteUser(){
            event.preventDefault();
            if(window.confirm("本当に退会しますか？")){
                document.getElementById("delete-form1").submit();
                alert("退会が完了しました。\nご利用ありがとうございました。");      
            } else {
            window.alert("退会をキャンセルしました。");
            }
        }
    </script>
    @endcan
    
    

@endsection