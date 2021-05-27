@extends('layouts.app')

@section('content')
<h1>購入した商品</h1>
@include('commons/textbooks')

<p>お買い上げありがとうございました</p>
    <a href="{{route('purchase_histories.index')}}">購入履歴へ</a>
@endsection