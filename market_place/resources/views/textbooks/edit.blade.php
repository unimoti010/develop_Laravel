@extends('layouts.app')

@section('content')

<h1>教科書情報の変更</h1>
 <form action="{{ route('textbooks.update',$textbook) }}" method="post"> 
    @method('put')
    @include('textbooks/form')
    <button type="submit">更新</button>
 </form> 
@endsection