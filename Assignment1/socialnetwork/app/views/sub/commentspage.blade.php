@extends('layouts.master')

@section('title')
Comments
@stop

@section('content')
<div class="col-md-9 col-sm-1" id="right"> 

<div id="commentpost">
        <div class = "bar" value="{{{ $post->id }}}">
            <p class ="white" id = "date">{{{ $post->title }}}</p>
        </div>   
        <figure><img id ="imgright" class="img-circle" src="images/rembrandt_profile.jpg" width="100px" height="100px"></figure>
        <h4><br>{{{ $post->message }}}</h4>

        <hr>     
        <h5>Comment/s</h5>
        @if ($comments)       
        @foreach ($comments as $comment)
        <h5><b>{{{ $comment->author }}}</b> says '<b>{{{ $comment->message }}}</b>'</h5>
        <a href="{{{ url("delete_comment_action/$comment->id") }}}"  class="btn btn-danger" role="button">Delete</a>
        <hr> 
        @endforeach
        @else
        <h5>Be the first to comment</h5>
        @endif
         
        </div>
            <!-- post form -->
      <hr>      
      <form class="form-horizontal" method="post" action="add_comment_action">
        <input type="hidden" name="id" value="{{{ $post->id }}}"> 
        <h4>Add comments</h4>
        <hr> 
        <div class="form-group">
          <label for="text" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-5">
            <input type="text" name= "author" class="form-control" id="inputEmail3" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="3" name= "message" placeholder="Message"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" value="Add post">Post</button>
          </div>
        </div>
      </form>
      <hr>
</div>

@stop