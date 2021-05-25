@extends('layouts.app')

@section('content')
@can('admin')
    <a href="{{ route('admin.allUsers') }}">会員一覧</a>
    <a href="{{ route('admin.allTextbooks') }}">教科書一覧</a>
@endcan
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">
</form>
@endsection