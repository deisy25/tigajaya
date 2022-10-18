@extends('layout.page')

@section ('content')
<section>
   <div class='detail'>

      <?php if($product->image): ?>
         <div>
            <img src="<?= asset('storage/'.$product->image) ?>" width="200">
         </div>
      <?php endif; ?>
      <div>
         <h2><?= $product->name ?></h2>
         <p>Brand: <?= $product->brand->name ?></p>
         <p><strong>$<?= $product->price ?></strong></p>

         <label>Quantity: </label><input type='number' value='1' min=1 max=9>
         <div>
            
            <a href="/buy/<?= $product->id?>" class='btn'>Buy Now</a>
         </div>
         <form>
            <input type='text' value="<?= $product->id ?>" name="productId">
            <a href="" class='btn'>Add to Wish List</a>
         </form>
         <div>
            <a href="" class='btn'>Add To Cart Now</a>
         </div>
         <details>
            <p><?= $product->description ?></p>
            <summary>
               <h3>Product Descriptions</h3>
            </summary>
         </details>

      </div>
   </div>  
   
   <!-- <h3>Review</h3> -->
   {{-- <?= $review->id ?> --}}
      
</section>
@endsection