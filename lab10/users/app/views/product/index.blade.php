@extends('product.layout')

@section('title')
Lab8
@stop

@section('product')

@foreach($products as $product)
<p>{{{ $product->name }}}</p>
@endforeach
@stop