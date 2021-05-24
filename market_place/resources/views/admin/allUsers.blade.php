@extends('layouts.app')

@section('content')
    <h1>会員一覧</h1><form action="{{ route('admin.allUsers') }}" method="get">
        @include('commons.searchUsers')
        <button type="submit">検索</button>
    </form>
    @include('commons.users')
@endsection