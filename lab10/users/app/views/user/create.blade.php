@extends('user.master')

@section('title')
Lab10
@stop

@section('product')

<h4> Create Account</h4>
{{ Form::open(array('action' => 'UserController@store')) }} 

{{ Form::label('username', 'Username: ') }}
{{ Form::text('username') }}
{{ $errors->first('username') }}
<br>
{{ Form::label('password', 'Password: ') }}
{{ Form::password('password') }}


<br>    
{{ Form::submit('Submit') }}
{{ Form::close() }}
    
<br>


   
@stop