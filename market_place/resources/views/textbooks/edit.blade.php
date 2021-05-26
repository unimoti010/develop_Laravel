@extends('layouts.app')

@section('content')

<h1>教科書情報の変更</h1>
@include('commons/flash')
 <form action="{{ route('textbooks.update',$textbook) }}" method="post"> 
    @method('put')
    @include('textbooks/form')
    <button type="submit">更新</button>
 </form> 
@endsection