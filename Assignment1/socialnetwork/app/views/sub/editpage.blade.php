@extends('layouts.master')

@section('title')
Edit
@stop

@section('content')
    <div class="col-md-9 col-sm-1" id="right"> 
    <!-- post form -->
    <hr>      
    <h4>Refine your masterpiece<br><br></h4>
          <form class="form-horizontal" method="post" action="{{{ url('update_post_action') }}}">
            <input type="hidden" name="id" value="{{{ $post->id }}}"> 
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-5">
                <input type="text" name="author" class="form-control" id="inputEmail3" value="{{{ $post->author }}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Title</label>
              <div class="col-sm-5">
                <input type="text" name="title" class="form-control" id="inputPassword3" value="{{{ $post->title }}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-8">
                <textarea class="form-control" rows="3" name="message">{{{ $post->message }}}</textarea>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              
                <button type="submit" class="btn btn-default" value = "Update post">Save</button>
                <a href="{{ secure_url('/') }}"  class="btn btn-primary" role="button">Cancel</a>
              </div>
            </div>
          </form>
          <hr>
    </div>
    
@stop