@extends('layouts.app')

@section('content')
<h1>購入した商品</h1>
@include('commons/textbooks')

<p>お買い上げありがとうございました</p>
{{-- <form action="{{route('purchase_histories.index')}}">
    @csrf --}}
    
    <a href="{{route('purchase_histories.index')}}">購入履歴へ</a>
    {{-- <button type="submit">購入履歴へ</button>
</form> --}}
@endsection