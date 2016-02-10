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
    <hr>      
    <h4>Edit post<br><br></h4>
    {{ Form::model($post, array('method' => 'PUT', 'route' => array('post.update', $post->id))) }} 
    {{ Form::hidden('name', $post->name) }}
    {{-- $errors->first('name') --}}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{-- $errors->first('price') --}}
    <br>   
    <br>   
    {{ Form::label('message', 'Message') }}
    {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '3')) }}
    {{-- $errors->first('message') --}}
    <br>
    <br>   
    {{ Form::label('privacy', 'Posting options:') }}
    <br>
    {{ Form::radio('privacy', 'private' )}}
    {{ Form::label('private', 'Private') }}
    <br>
    {{ Form::radio('privacy', 'public' )}}
    {{ Form::label('public', 'Public') }}
    <br>
    {{ Form::radio('privacy', 'friends' )}}
    {{ Form::label('friends', 'Friends') }}
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-default')) }}
    {{ link_to_route('post.index', 'Cancel', array($post->id), array('class' => 'btn btn-primary')) }}
    <br>
    {{ Form::close() }}          
          <hr>
    </div>
    
@stop