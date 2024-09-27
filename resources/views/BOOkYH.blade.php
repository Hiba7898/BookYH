<!-- page header -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bookYH @yield('title')</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- page header -->
<header class="header">
    <div class="header-1">
        <div class="flex">
            
                    <a  style="font-size: 18px" href="{{route('accueil')}}" class="logo">BOOkYH </a>
        
                
            
            <div class=" share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            @if (Route::has('login'))
                <div class="k">
                    @auth
                        <a href="{{ url('/accueil') }}" class="m">ACCUEIL</a>
                    @else
                        <a href="{{ route('login') }}" class="l">Log in</a>
                        /

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="h">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    

    
</header>
<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

          
        </div>

        <section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
            <p>E-Reads for Everyone: Your Online Bookstore for the Digital Age
        At BooKYH, we believe that reading should be accessible to everyone.
        That's why we've created a platform where you can find, purchase,
        and read e-books from the comfort of your own device. With a vast library of titles,
        competitive prices, and a user-friendly interface,
            we aim to provide a seamless reading experience for book lovers everywhere. 
            Thanks for visiting BooKYH.
       <p><i class="fa fa-align-center" aria-hidden="true">Happy reading!</i> </p>
      </div>
      

</section>
        