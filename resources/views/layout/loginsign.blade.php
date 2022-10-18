<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tiga Jaya</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{url('app.css')}}">

    <!-- <script src="<?= url('app.js') ?>"></script> -->
    
</head>
<body>
   <header class="w3-padding">
      <a href='/'><img class='logo' src="{{url('logo.png')}}" width=200></a>
   </header>

   @yield ('content')

   </body>
</html>