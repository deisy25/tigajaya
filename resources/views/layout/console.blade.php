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
      <img class='logo' src="{{url('logo.png')}}" width=200>
      <?php if(Auth::check()): ?>
         <div class="dashboard">
            You are logged in as 
               <strong>
                  <?= auth()->user()->firstname ?>  <?= auth()->user()->lastname ?>   
               </strong> |
            <a href="/console/dashboard">Dashboard</a> | 
            <a href="/">Go to Website</a> | <a href="/console/logout">Log Out</a>
         </div>
      <?php else: ?>
         <div class="dashboard">
            <a href="/">Return to Website</a>
      </div>
      <?php endif; ?>
         
   </header>

   <hr>

   @if (session()->has('message'))
      <div class="w3-padding w3-margin-top w3-margin-bottom">
            <div class="w3-red w3-center w3-padding">{{session()->get('message')}}</div>
      </div>
   @endif

   @yield ('content')

   </body>
</html>