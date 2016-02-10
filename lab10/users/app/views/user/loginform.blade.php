@extends('user.master')

@section('title')
Lab10
@stop

@section('product')

<h4> Login Page</h4>
    @if(Auth::check())
        <h6>hey, {{ Auth::user()->username }}</h6>
        {{ link_to_route('user.logout', 'Logout') }}
    @else
        {{ Form::open(array('route' => 'user.login')) }} 

    {{ Form::label('username', 'Username: ') }}
    {{ Form::text('username') }}
    {{ Session::get('login_error') }}
    <br>
    {{ Form::label('password', 'Password: ') }}
    {{ Form::password('password') }}
    {{ Session::get('login_error') }}
    <br>
    {{ Form::submit('Login') }}
    {{ Form::close() }}
    {{ link_to_route('user.create', 'Create') }}   
@endif
@stop