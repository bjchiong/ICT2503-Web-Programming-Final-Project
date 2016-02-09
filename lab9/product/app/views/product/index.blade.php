
@extends('product.master')

@section('title')
Lab9
@stop

@section('product')

   @foreach($products as $product)
   
   <li>{{ link_to_route('product.show', $product->name, array($product->id)) }}</li>
   
   @endforeach
    
   
@stop