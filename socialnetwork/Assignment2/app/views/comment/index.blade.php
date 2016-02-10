@extends('sub.master')

@section('title')
Comment
@stop

<!--Comment Page -->
@section('nav')
    <a class ="white" href="{{ secure_url('/') }}">Search&nbsp; |</a></h4>
    <li>{{ link_to_route('user.logout', 'Logout |') }}</li>
    <li>{{link_to_route('user.edit', 'Update Profile |', array(Auth::user()->id)) }}</li>
@stop


@section('content')
<!-- profile photo -->
<div class="col-md-3" id="left"> 
    <div id="photocontainer">
        <div id = "profilebar"></div>
            <img src="image/profilepic.jpeg" alt="Responsive image"  class="img-circle" width="200px" height="200px">
            <hr>
             <h4 style="text-align: center">Hello {{ Auth::user()->fullname }}!</h4>
        </div>
    </div>
    
<div class="col-md-9 col-sm-9" id="right"> 
<!-- comments area -->
    <div id="commentpost">
        <div class = "bar">
            <p class ="white" id = "date">Title</p>
        </div>   
        <h4><br>{{{ $post->message }}}</h4>
        <hr>     
        <h5>Comment/s</h5>
        @if(count($comments)!=0)     
        @foreach ($comments as $comment)
        <h5><b>{{{ $comment->name }}}</b> says '<b>{{{ $comment->message }}}</b>'</h5>
        {{ Form::open(array('method' => 'Delete', 'route' =>
            array('comment.destroy', $comment->id))) }}
                 {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}       
        <hr> 
        @endforeach
        @else
        <h5>Be the first to comment</h5>
        @endif 
        </div>
    
    <div id="commentarea">     
    <!-- comment form -->
        {{ Form::open(array('action' => 'CommentController@store')) }} 
        {{ Form::hidden('id', $post->id) }}
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}
        {{ $errors->first('name') }}
        <br>   
        <br>   
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '3')) }}
        {{ $errors->first('message') }}
        <br>
        <br>   
        {{ Form::submit('Comment', array('class' => 'btn btn-default')) }}
        {{ link_to_route('post.index', 'Cancel', array('class' => 'btn btn-primary')) }}
        <br>
        {{ Form::close() }}  
          <hr>      
        {{ $comments->links() }}
    </div>
</div>

@stop