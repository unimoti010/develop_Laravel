@extends('layouts.app')

@section('content')
<!--テキストp.120参照-->
<a href="{{ route('users.destroy', $user) }}" onclick="deleteUser()">退会する</a> 
<form action="{{ route('users.destroy', $user) }}" method="post"  id="delete-form">
    @csrf
    @method('delete')
</form>
<!--退会確認のポップアップを表示-->
<script>
  function deleteUser(){
      if(window.confirm("本当に退会しますか？")){
          document.getElementById('delete-form').submit();
          alert("退会が完了しました。ご利用ありがとうございました。")
            
      } else {
      //「キャンセル」をクリックしたとき、会員情報変更画面に戻る
      alert("退会をキャンセルしました。");
      window.location.href = "resources/view/user/edit";
      }
  }
</script>

@endsection