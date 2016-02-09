@extends('product.master')

@section('title')
Lab9
@stop

@section('product')


{{ Form::model($product, array('method' => 'PUT', 'route' => array('product.update', $product->id))) }} 

{{ Form::label('name', 'Product name') }}
{{ Form::text('name') }}
{{ $errors->first('name') }}
<br>
{{ Form::label('price', 'Price') }}
{{ Form::text('price') }}
{{ $errors->first('price') }}
<br>    
{{ Form::submit('Edit') }}

{{ Form::close() }}
    
   
@stop