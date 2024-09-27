

@extends('layout')
  

@section('content')
<!-- page home -->
<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
      <a href="{{route('About')}}" class="white-btn">discover more</a>
   </div>

</section>

<!-- product shop -->
<h1 class="title">latest products</h1>

<form action="" method="post" class="box">
      <img class="image" src="uploaded_img/" alt="">
      <div class="name"></div>
      <div class="price"></div>
      <input type="number" min="1" name="product_quantity" value="" class="qty">
      <input type="hidden" name="product_name" value="">
      <input type="hidden" name="product_price" value="">
      <input type="hidden" name="product_image" value="">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
     </div>

     <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="#" class="option-btn">load more</a>
   </div>

</section>

<!-- PAGE About -->

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="/images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="{{route('About')}}" class="btn">read more</a>
        
      </div>

   </div>
   </section>
 <!--   athder part -->
   <section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
      <a href="{{route('contact')}}" class="white-btn">contact us</a>
   </div>

</section>





@endsection

@section('title','accueil')


</body>
</html>





   




