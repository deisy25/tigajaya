@extends('layout.page')

@section ('content')
<section>
   <div class='buyReview'>
      <h3>Review Item and shipping</h3>

      <div class='detail'>
         <img src="<?= asset('storage/'.$product->image) ?>" width="200">
         <div>

            <h2> <?= $product->name ?></h2>
            <p>Quantity: 2 </p>

            Est. Delivery: Monday, October 20 2022

            <p> Total:  <?= 2 * $product->price ?> </p>
         </div>
      </div>   
      <hr/>

      <h3> Ship to </h3>

      <div>
         <input type='text' placeholder='John Smith'>
      </div>
      <div>
         <input type='email' placeholder='johnsmith@gmail.com'>
      </div>
      <div>
         <input type='text' placeholder='address'>
      </div>
      <div>
         <input type='text' placeholder='M4R1S9'>
      </div>
      <div>
         <input type='text' placeholder='+15090241234'>
      </div>
      
      <div>
            
            <a href="/confirm" class='btn'>Buy Now</a>
         </div>
   </div>

</section>
@endsection