<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel CRUD Tutorial With Example - Tutsmake.com</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body{
    background-color: black;
    }
    .container{
    background: #202020;
    padding: 4%;
    border-top-left-radius: 0.10rem;
    border-bottom-left-radius: 0.50rem;
    color: white;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <br><br><br>
      @yield('content')
    </div>
  </body>
</html>