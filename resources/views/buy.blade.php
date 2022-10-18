@extends('layout.page')

@section ('content')
<section>
   <h3>Review Item and shipping</h3>
   <img src="<?= asset('storage/'.$product->image) ?>" width="200">
   <?= $product->name ?>
   Quantity: 2

   Est. Delivery: Monday, October 17 2022

   Total:  <?= 2 * $product->price ?>
      
   <hr/>
   <h3> Ship to </h3>

   

</section>
@endsection