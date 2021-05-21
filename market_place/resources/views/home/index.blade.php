@extends('layouts.app')

@section('content')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">
</form>
@endsection