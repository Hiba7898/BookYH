<!-- page header -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <script src="{{asset('js/app.js')}}" defer></script>

    
   <link href="{{asset('css/app.css')}}" rel="stylesheet">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- page header -->
   @include('layouts.navigation')
<header class="header">
  
   
   
    

    <div class="header-2">
        <div class="flex">
         
           <div class="navbar">
               <a href="{{route('accueil')}}">accueil</a>
               <a href="{{route('About')}}">about</a>
               <a href="#">shop</a>
               <a href="{{route('contact')}}">contact</a>
               <a href="{{route('orders')}}">orders</a> 
           </div> 

        </div>
    </div>        
         
    
        
    
 
    
</header>


<body class="antialiased">
        
        @yield('content')
        <!-- PAGE footer -->
       
<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="{{route('accueil')}}">accueil</a>
      <a href="{{route('About')}}">about</a>
      <a href="shop.blade.php">shop</a>
      <a href="{{route('contact')}}">contact</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <!-- <a href="{{route('login')}}">login</a>
      <a href="{{route('register')}}">register</a> -->
      <a href="cart.php">cart</a>
      <a href="{{route('orders')}}">orders</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <p> <i class="fas fa-phone"></i> +00 00 00 00 00 </p>
      <p> <i class="fas fa-phone"></i>  +00 00 00 00 00  </p>
      <p> <i class="fas fa-envelope"></i> hebakandaoui@gmail.com </p>
      <p> <i class="fas fa-map-marker-alt"></i> maroc-casablanca </p>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>



</section>

        </body>
</html>
