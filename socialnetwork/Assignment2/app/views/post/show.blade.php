@extends('sub.master')

@section('title')
Social Network
@stop

<!--Post Page -->
@section('nav')
    <a class ="white" href="{{ secure_url('/') }}">Search&nbsp; |</a></h4>
    <li>{{ link_to_route('user.logout', 'Logout |') }}</li>
    <li>{{link_to_route('user.edit', 'Update Profile |', array(Auth::user()->id)) }}</li>
@stop


@section('content')
    <div class="col-md-3" id="left"> 
        <div id="photocontainer">
            <div id = "profilebar"></div>
               <img src="image/profilepic.jpeg" alt="Responsive image"  class="img-circle" width="200px" height="200px">
               <hr>
               <h4 style="text-align: center">Hello {{ Auth::user()->fullname }}!</h4>

        </div>
    </div>
         
         
         
    <div class="col-md-9 col-sm-12" id="right"> 
            <!-- post form -->
    <h3>What's on your mind?</h3><hr><br>        
    {{ Form::open(array('action' => 'PostController@store')) }}  
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}
    {{-- $errors->first('name') --}}
    <br>
    <br>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{-- $errors->first('price') --}}
    <br>   
    <br>   
    {{ Form::label('message', 'Message') }}
    {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '3')) }}
    {{-- $errors->first('message') --}}
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
    {{ Form::submit('Post', array('class' => 'btn btn-default')) }}
    <hr>
    <br>
    <br>
    {{ Form::close() }}   
            <!-- posts -->
               @foreach ($posts as $post)
               <div id="post">
                  <div class = "bar" value="{{{-- $post->id --}}}">
                     <p class ="white" id = "date">{{{ $post->title }}}</p>
                  </div>   
                     <figure><img id ="imgright" class="img-circle" src="image/profilepic.jpeg" width="100px" height="100px"></figure>
                     <h4><br>{{{ $post->message }}}</h4>
                     <h5>Post by {{{ $post->name }}}</h5>
                     <br>
                     {{ link_to_route('post.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary')) }}    
                    <br>
                        {{ Form::open(array('method' => 'Delete', 'route' =>
                        array('post.destroy', $post->id))) }}
                        <br> 
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}     
                     <hr>
                     
               {{--      <h5 id = "positivelink"><a href="{{{ url("/$post->id") }}}">View Comments ({{{ $total }}}) </a></h5> --}}
                 <h5 id = "positivelink"> {{ link_to_route('comment.show', 'View Comments', array($post->id)) }} </h5>
               </div>
             @endforeach 
    </div>         

@stop




