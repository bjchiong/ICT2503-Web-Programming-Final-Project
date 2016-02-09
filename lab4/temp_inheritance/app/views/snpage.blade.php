@extends('layouts.master')

@section('title')
Social Network
@stop

@section('content')

 <div class="container">
         <div class="col-md-3" id="left"> 
            <div id="photocontainer">
               <div id = "profilebar"></div>
               <img src="images/rembrandt_profile.jpg" alt="Responsive image" id="profilephoto"  class="img-circle" width="140px" height="140px">
               <hr>
               <h4 style="text-align: center">Rembrandt <br>Harmenszoon van Rijn!</h4>
               <h6 style="text-align: center">Dutch painter extrordinaire. <br>Follow me on twitter and instagram.<br> @remmy</h6>
            </div>
         </div>
         <div class="col-md-9 col-sm-1" id="right"> 
            <!-- posts -->
                @foreach ($posts as $post)
               <hr>
               <div id="post">
                  <div class = "bar">
                     <p class ="white" id = "date">{{{ $post['date'] }}}</p>
                  </div>   
                     <h5>{{{ $post['message'] }}}</h5>
               </div>
               <figure><img id ="imgright" src="{{{ $post['image'] }}}" width="200px" height="200px"></figure>
               @endforeach
               <div class = "blankspace"></div>
         </div>   
         <div class="col-md-12" id="footer">
            <h4 style="text-align:center; color : white">Art Society</h4>
         </div>
   </div>

@stop




