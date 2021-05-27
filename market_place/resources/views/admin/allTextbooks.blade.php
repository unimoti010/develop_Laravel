@extends('layouts.app')

@section('content')
    <h1>教科書一覧</h1>
    <form action="{{ route('admin.allTextbooks') }}" method="get">
        @include('commons.searchTextbooks')
    </form>
    @include('commons.textbooks')
@endsection