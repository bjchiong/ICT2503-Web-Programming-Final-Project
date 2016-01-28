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
      <div class = "row">
         <div class="col-md-12" id="nav"><p class ="white" id="logo">Social Network</p>
            <ul id=links>
               <li class="white"><a href="">Photo</a></li>
               <li class="white"><a href="">Friends</a></li>
               <li class="white"><a href="">Login</a></li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-5" id="left"> 
            <div id="photocontainer">
               <img src="rembrandt_profile.jpg" alt="Responsive image" class="img-responsive" id="profilephoto" width="200px" height="200px">
               <p>Hi, Rembrandt Harmenszoon van Rijn!</p>
            </div>
         </div>
         
         <div class="col-md-9 col-sm-7" id="right"> 
            <!-- posts -->
            <div id="posts">
               <?php foreach ($posts as $post) { ?>
               <div class="post">
                  <div class="textarea">
                     <p><?= $post['date']?></p>
                     <p><?= $post['message']?></p>
                  </div>
                  <div class="photoarea">
                  <figure><img src="<?= $post['image'] ?>" width="200px" height="200px"></figure>
                  </div>
               </div>
               <?php } ?>
   </div><!-- /.container -->
</body></html>