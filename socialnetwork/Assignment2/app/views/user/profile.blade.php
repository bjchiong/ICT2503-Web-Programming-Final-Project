@extends('sub.master')

@section('title')
User profile page
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
               <h4 style="text-align: center">{{{ $user->fullname }}}</h4>
               <h4 style="text-align: center">{{{ $user->birthday }}}</h4>

        </div>
    </div>
         
         
         
    <div class="col-md-9 col-sm-12" id="right"> 
  
<!-- User profiles -->
@foreach ($posts as $post)
    <div id="post">
        <div class = "bar" value="{{{-- $post->id --}}}">
            <p class ="white" id = "date">{{{ $post->title }}}</p>
                </div>   
                <figure><img id ="imgright" class="img-circle" src="image/profilepic.jpeg" width="100px" height="100px"></figure>
                <h4><br>{{{ $post->message }}}</h4>
                <h5>Post by {{{ $post->name }}}</h5>
                <br>
                <hr>
               </div>
        @endforeach
    </div>         

@stop




