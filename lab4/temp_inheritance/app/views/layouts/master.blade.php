<!-- display results -->
<!DOCTYPE html>
<!-- Results page of associative array search example. -->
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>

<body>
   <div class="container">
 
         <div class="col-md-12" id="nav">
            <h4 class ="white" id="logo">Art Society</h4>
            <ul id=links>
               <li class="white"><h5><a href="">Photo</a></h5></li>
               <li class="white"><h5><a href="">Friends</a></h5></li>
               <li class="white"><h5><a href="">Login</a></h5></li>
            </ul>
         </div>
    </div>     
  @section('con')
  @show
</body>
</html>