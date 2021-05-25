@extends('layouts.app')

@section('content')
@if ($user->admin == 0)
    {{-- @can('administrators.view') --}}
    <a href="{{ route('admin.allUsers') }}">会員一覧</a>
    <a href="{{ route('admin.allTextbooks') }}">教科書一覧</a>
    {{-- @endcan --}}
@endif
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">
</form>
@endsection