@extends('layout.page')

@section ('content')
<section class='wishlist'>
   <h3>Wish List</h3>

   <div>
      <?php if($wishlist-> count() > 0): ?>
         <?php foreach($wishlist as $showdata): ?>
            <div>
               <a href="/detail/<?= $showdata->product->id?>"><img src="<?= asset('storage/'.$showdata->product->image) ?>" width="200"></a>
            </div>
         <?php endforeach; ?>
      <?php else: ?>
         <h4> No products in your wishlist </h4>
      <?php endif; ?>
   </div>   

</section>
@endsection