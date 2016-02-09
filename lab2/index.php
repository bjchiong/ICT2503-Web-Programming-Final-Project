<?php

   $posts = array();
   $posts[0] = array('date' => '27 Jan 2014','message' => 'Profile photo updated', 'image'=>'rembrandt.jpg');
   $posts[1] = array('date' => '28 Jan 2014', 'message'=> 'Van Gogh just <br>added you as friend', 'image'=>'vangogh.jpg');
   $posts[2] =  array('date' => '29 Jan 2014', 'message'=> 'Girl with pearl earring <br>commented on your post', 'image'=>'girlwithpearl.jpg');

?>


<!DOCTYPE html>
    <html lang="en“>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
 
         <div class="col-md-12" id="nav">
            <h4 class ="white" id="logo">Social Network</h4>
            <ul id=links>
               <li class="white"><h5><a href="">Photo</a></h5></li>
               <li class="white"><h5><a href="">Friends</a></h5></li>
               <li class="white"><h5><a href="">Login</a></h5></li>
            </ul>
         </div>
      
         <div class="col-md-4 col-sm-5" id="left"> 
            <div id="photocontainer">
               <img src="rembrandt_profile.jpg" alt="Responsive image" id="profilephoto" width="200px" height="200px">
               <h5>Hi, Rembrandt Harmenszoon van Rijn!</h5>
            </div>
         </div>
         <div class="col-md-8 col-sm-7" id="right"> 
            <!-- posts -->
                <?php foreach ($posts as $post) { ?>
               <div id="post">
                     <h6><?= $post['date']?></h6>
                     <h5><?= $post['message']?></h5>
               </div>
               <figure><img id ="imgright" src="<?= $post['image'] ?>" width="200px" height="200px"></figure>
               <?php } ?>
         </div>   
   </div>
</body>
</html>