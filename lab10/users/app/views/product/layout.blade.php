<!DOCTYPE html>

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

    <p>logged out!</p>
   {{ link_to_route('user.create', 'Create') }}  
   <br>

    @section('product')
    @show
</body>

</html>