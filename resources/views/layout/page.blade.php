<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Tiga Jaya</title>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="{{url('app.css')}}">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="<?= url('app.js') ?>"></script>
    
</head>
<body>
   <header class="head-page">
      <a href="/"><img class='logo' src="{{url('logo.png')}}" width=120> </a>

      <nav class="main-menu" aria-label="menu">
         <!-- <span class="bars" onclick="toggleMenu()"></span> -->
         <ul class="menu">
            <li><a href="#">Appliances</a></li>
            <li><a href="#">Kitchen & Dining</a></li> 
            <li><a href="#">Storage & Organization</a></li> 
         </ul>
      </nav>
   
   
      <div>
         <a href="/login"><span class="user"></span></a>
         <a href="/wish"><span class="heart"></span></a>
         <span class="cart"></span>
      </div>         
   </header>

   <?php if(Auth::check()): ?>
      <div class="dashboard">
         Welcome, 
            <strong>
               <?= auth()->user()->firstname ?>  <?= auth()->user()->lastname ?>   
            </strong> 
      </div>
   <?php endif; ?>

   @yield ('content')

   </body>

   <footer>
      <p>&copy; 2022. Tiga Jaya</p>
   </footer>
</html>