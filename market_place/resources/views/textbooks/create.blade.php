@extends('layouts.app')

@section('content')

<h1>教科書の登録</h1>
<form action="{{ route('textbooks.store') }}" method="post">
    @include('textbooks/form')
    <button type="submit">登録</button>
</form>
@endsection