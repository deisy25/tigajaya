@extends('layout.page')

@section ('content')
<section>
   <h3>Wish List</h3>

   <?php if($wishlist-> count() > 0): ?>
      <?php foreach($wishlist as $showdata): ?>
         <div>

            <?= $showdata->product->name ?>
         </div>
      <?php endforeach; ?>
   <?php else: ?>
      <h4> No products in your wishlist </h4>
   <?php endif; ?>

</section>
@endsection