<!-- display results -->
<!DOCTYPE html>

<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
    <style>
       p {
    font-family: arial, helvetica, sans-serif;
    font-size: 14pt;
}

h1, h2, h3, h4, h5, h6 {
    font-family: arial, helvetica, sans-serif;
}

.white {
    color: white;
}

.container {
    margin-top: 0px;
    margin-left: auto;
    margin-right: auto;
}

ul li {
    margin-top: 46px;
    display: inline-block;
    list-style-type: none;
    margin-right: 10px;
}

.textarea {
    padding: 10px;
}

.blankspace {
    height: 20px;
}

.img-circle{
    display: block;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
}


.bar {
    margin: -10px -10px 0 -10px;
    padding: 8px 8px 8px 12px;
    height: 30px;
    background-color:black;
}

.form-horizontal {
    clear:both;
}

#addcomment {
    clear:both;
}

#profilebar {
    margin: 0px -15px 0 -15px;
    padding: 8px;
    height: 30px;
    background-color:black;
}

#date {
    font-size:9pt;
}

#nav {
    height:85px;
    background-color:black;
    padding: 0 10px 0 10px;
    margin-bottom: 10px;
}

#footer {
    margin-top: 20px;
    background-color:black;
    padding-top: 10px;
    height: 60px;
}

#post {
    margin-left: 60px;
    margin-bottom: 20px;
    padding: 10px;
    width: 80%;
    height: 100%;
    border: solid 1px #d9d9d9;
    background-color: white;
    float:left;
}

#commentpost {
    margin-left: 50px;
    margin-bottom: 50px;
    margin-top: 18px;
    padding: 10px;
    width: 80%;
    height: 100%;
    border: solid 1px #d9d9d9;
    background-color: white;
    float:left; 
}

#commentarea {
 clear: both;   
}    
#left {
    margin-top: 30px;
    border: solid 1px #d9d9d9;
    height: 100%;
    padding-bottom: 40px;
}


#right {
    margin-top: 12px;
}

#logo {
    margin-top: 55px;
    float: left;
}

#links {
    position: absolute;
    right: 5px;
}


#imgright {
    float: right;
    display: block;
    margin-right: -2px;
    margin-top: 5px;
}

/* unvisited link */
a:link {
    color: white;
}


/* visited link */
#links a:visited {
    color: white;
}

#positivelink a:visited {
    color: black;
}

#positivelink a:link {
    color: black;
}

/* mouse over link */
#links a:hover {
    color: #FF9933;
    text-decoration: none;
}

/* mouse over link */
#logo a:hover {
    color: #FF9933;
    text-decoration: none;
}

/* selected link */
a:active {
    color: #FF9933;
}
    </style>
</head>

<body>
   <div class="container">
 
         <div class="col-md-12" id="nav">
            <h4 id="logo"><a class ="white" href="{{ secure_url('/') }}">Art Society</a></h4>
            <ul id=links>
               <li class="white"><h5><a href="">Photo</a></h5></li>
               <li class="white"><h5><a href="">Friends</a></h5></li>
               <li class="white"><h5><a href="">Login</a></h5></li>
               <li class="white"><h5><a href="pdf/s2874131_documentation.pdf">Documentation</a></h5></li>
            </ul>
         </div>
         
         <div class="col-md-3" id="left"> 
            <div id="photocontainer">
               <div id = "profilebar"></div>
               <img src="images/rembrandt_profile.jpg" alt="Responsive image"  class="img-circle" width="200px" height="200px">
               <hr>
               <h4 style="text-align: center">Rembrandt <br>Harmenszoon van Rijn!</h4>
               <h6 style="text-align: center">Dutch painter extrordinaire. <br>Follow me on twitter and instagram.<br> @remmy</h6>
            </div>
         </div>
         
         
        @section('content')
        @show

           <div class="col-md-12" id="footer">
               <h4 style="text-align:center; color : white">Art Society</h4>
           </div>
    </div> 
</body>
</html>