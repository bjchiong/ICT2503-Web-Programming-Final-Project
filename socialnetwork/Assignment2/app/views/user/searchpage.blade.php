@extends('sub.master')

@section('title')
Create Account
@stop


@section('content')


<div id="searchpage"  class="col-md-6"> 
    <h3>Search user</h3>
    {{ Form::open(array('action' => 'UserController@show')) }} 
    {{ Form::label('fullname', 'Name') }}
    {{ Form::text('fullname') }}
    {{-- $errors->first('name') --}}
    <br>
    <br>
    {{ Form::submit('Search', array('class' => 'btn btn-primary btn-sm')) }}
    <br>
</div>
    
@stop