@extends('sub.master')

@section('title')
Create Account
@stop


@section('content')

<div id="createaccount"  class="col-md-7">     
    <h3>Create an account</h3>
        <!-- post form -->
    <hr>    
    {{ Form::open(array('action' => 'UserController@store')) }} 
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}
    {{ $errors->first('email') }}
    <br>   
    <br>   
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{ $errors->first('password') }}
    <br>
    <br> 
    {{ Form::label('fullname', 'Full name') }}
    {{ Form::text('fullname') }}
    {{ $errors->first('fullname') }}
    <br>
    <br> 
    {{ Form::label('birthday', 'Date of Birth') }}
    {{ Form::text('birthday') }}
    {{ $errors->first('birthday') }}
    <br> 
    <br> 
    {{ Form::submit('Sign up', array('class' => 'btn btn-primary btn-sm')) }}
    {{ Form::close() }} 
    <br>
    <br>
                     
</div>

<div id="searchpage"  class="col-md-5"> 
    <h3>Search user</h3>
    {{ Form::open(array('route' => 'user.search')) }} 
    {{ Form::label('fullname', 'Name') }}
    {{ Form::text('fullname') }}
    {{-- $errors->first('fullname') --}}
    <br>
    <br>
    {{ Form::submit('Search', array('class' => 'btn btn-primary btn-sm')) }}
    {{ Form::close() }}
    <br>
    <hr>
    <h3>Login</h3>
    {{ Form::open(array('action' => 'user.login')) }} 
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}
    {{ Session::get('login_error') }}
    <br>
    <br>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{ Session::get('login_error') }}
    <br> 
    {{ Form::submit('Login', array('class' => 'btn btn-primary btn-sm')) }}
    {{ Form::close() }}
    <br>   
</div>
    
@stop