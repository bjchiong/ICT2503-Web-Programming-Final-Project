@extends('sub.master')

@section('title')
Social Network
@stop

<!--Search Result page -->
@section('nav')
    <a class ="white" href="{{ secure_url('/') }}">Search&nbsp; |</a></h4>
@stop


@section('content')
        
         
    <div class="col-md-4 col-sm-12" id="right"> 
    <!-- user search results -->
               @foreach ($users as $user)
               <div id="post">
                  <div class = "bar">
                  </div>   
                     <h5><b>{{{ $user->fullname }}}</b></h5>
                     <h6><br>{{{ $user->birthday }}}</h6>
                     <h5 id = "positivelink"> {{ link_to_route('user.show', 'View Profile', array($user->id)) }} </h5>
                     <br>
               </div>
             @endforeach 
    </div>         

@stop




