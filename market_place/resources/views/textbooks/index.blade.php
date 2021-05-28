@extends('layouts.app')

@section('content')
    <h1>教科書一覧</h1>
    <form action="{{ route('textbooks.index') }}" method="get">
        @include('commons.searchTextbooks')
    </form>
    @include('commons.textbooks')
@endsection