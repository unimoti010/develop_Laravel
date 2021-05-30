@extends('layouts.app')

@section('content')
    <h1>会員一覧</h1><form action="{{ route('admin.allUsers') }}" method="get">
        @include('commons.searchUsers')
    </form>
    @include('commons.users')
@endsection