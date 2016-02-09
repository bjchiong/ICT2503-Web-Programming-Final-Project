@extends('layouts.master')

@section('title')
Social Network
@stop

@section('content')

         <div class="col-md-9 col-sm-1" id="right"> 
            <!-- post form -->
      <hr>      
      <h4>Make your creative post<br><br></h4>
      <form class="form-horizontal" method="post" action="add_post_action">
        <div class="form-group">
          <label for="text" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-5">
            <input type="text" name= "author" class="form-control" id="inputEmail3" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Title</label>
          <div class="col-sm-5">
            <input type="text" name= "title" class="form-control" id="inputPassword3" placeholder="Title">
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
            <!-- posts -->
          {{--  @for ($i = $size - 1; $i >= 0; $i--) --}}
          @foreach ($sizes as $size)
          <h5>comments({{{ $size->id }}})</h5>
          @endforeach
               @foreach ($posts as $post)
                
               <div id="post">
                  <div class = "bar" value="{{{ $post->id }}}">
                     <p class ="white" id = "date">{{{ $post->title }}}</p>
                  </div>   
                     <figure><img id ="imgright" class="img-circle" src="images/rembrandt_profile.jpg" width="100px" height="100px"></figure>
                     <h4><br>{{{ $post->message }}}</h4>
                     <h5>Post by {{{ $post->author }}}</h5>
                     <br>
                     <a href="{{{ url("editpage/$post->id") }}}"  class="btn btn-primary" role="button">Edit</a>
                     <a href="{{{ url("delete_post_action/$post->id") }}}"  class="btn btn-danger" role="button">Delete</a>
                     <hr>
                     <h5 id = "positivelink"><a href="{{{ url("/$post->id") }}}" >View Comments(1) </a></h5>
               </div>
             @endforeach
    </div>         

@stop




