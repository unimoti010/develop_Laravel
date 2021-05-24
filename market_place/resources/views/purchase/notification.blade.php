@extends('layouts.app')

@section('content')
<h1>購入した商品</h1>
@include('commons/books')

<p>お買い上げありがとうございました</p>
<form action="{{route('purchase_histories.index')}}">
    @csrf
    <button type="submit">購入履歴へ</button>
</form>
@endsection