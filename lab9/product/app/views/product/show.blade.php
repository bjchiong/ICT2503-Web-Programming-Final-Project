@extends('product.master')

@section('title')
Lab9
@stop

@section('product')

<h4>Product</h4>

<li> Name:{{{ $product->name }}}</li>
<li> Price: {{{ $product->price }}}</li>

<a>{{ link_to_route('product.edit', 'Edit', array($product->id)) }}</>



@stop