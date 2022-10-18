@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Add Reviews</h2>

   <form method="post" action="/console/reviews/edit/<?= $review->id ?>" novalidate class="w3-margin-bottom">

      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="product">Product:</label>
         <select name="product_id" id="product_id">
            <option>--Select Product--</option>
            <?php foreach($product as $product): ?>
                  <option value="<?= $product->id ?>"
                     <?= $product->id == old('product_id') ? 'selected' : '' ?>>
                     <?= $product->name ?>
                  </option>
            <?php endforeach; ?>
         </select>
         
         <?php if($errors->first('product_id')): ?>
            <br>
            <span class="w3-text-red"><?= $errors->first('product_id'); ?></span>
         <?php endif; ?>
      </div>  

      <div class="w3-margin-bottom">
         <label for="user_id">Full Name:</label>
         <select name="user_id" id="user_id">
            <option>--Select Name--</option>
            <?php foreach($user as $user): ?>
               <option value="<?= $user->id ?>"
                  <?= $user->id == old('user_id') ? 'selected' : '' ?>>
                  <?= $user->firstname ?> <?= $user->lastname ?>
               </option>
            <?php endforeach; ?>
         </select>
         
         <?php if($errors->first('user_id')): ?>
            <br>
            <span class="w3-text-red"><?= $errors->first('user_id'); ?></span>
         <?php endif; ?>
      </div>  

      <div class="w3-margin-bottom">
         <label for="rating">Rating:</label>
         <input type="number" name="rating" id="rating" min=1 max=5 value="<?= old('rating', $review->rating) ?>" required> 
         <?php if($errors->first('rating')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('rating'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="detail">Detail:</label>
         <textarea name="detail" id="detail" required>
            <?= old('detail', $review->detail) ?>
         </textarea>
         
         <?php if($errors->first('price')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('price'); ?></span>
         <?php endif; ?>
      </div>

      <button type="submit" class="w3-button w3-green">Add Products</button>

   </form>

   <a href="/console/products/list">Back to Prands List</a>
</section>
@endsection