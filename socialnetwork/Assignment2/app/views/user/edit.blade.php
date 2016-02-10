@extends('sub.master')

@section('title')
Edit
@stop

@section('nav')
    <a class ="white" href="{{ secure_url('/') }}">Search&nbsp; |</a></h4>
    <li>{{ link_to_route('user.logout', 'Logout |') }}</li>
    <li>{{link_to_route('user.edit', 'Update Profile |', array(Auth::user()->id)) }}</li>
@stop

@section('content')
    <div class="col-md-9 col-sm-1" id="right"> 
    <!-- post form -->
<div id="createaccount">     
    <h3>Update your profile</h3>
        <!-- post form -->
    <hr>    
    {{ Form::model($user, array('method' => 'PUT', 'route' => array('user.update', $user->id))) }} 
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}
    {{-- $errors->first('name') --}}
    <br>   
    <br>   
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{-- $errors->first('message') --}}
    <br>
    <br> 
    {{ Form::label('fullname', 'Full name') }}
    {{ Form::text('fullname') }}
    {{-- $errors->first('message') --}}
    <br>
    <br> 
    {{ Form::label('birthday', 'Date of Birth') }}
    {{ Form::text('birthday') }}
    {{-- $errors->first('message') --}}
    <br> 
    <br> 
    {{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
    {{ Form::close() }} 
    <br>
    <br>
                     
</div>        
          <hr>
    </div>
    
@stop