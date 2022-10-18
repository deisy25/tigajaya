@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Add Wishlists</h2>

   <form method="post" action="/console/wishlists/add" novalidate class="w3-margin-bottom">

      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="product_id">Product:</label>
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
            <option>--Select User--</option>
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

      

      <button type="submit" class="w3-button w3-green">Add Wishlist</button>

   </form>

   <a href="/console/wishlists/list">Back to Wishlists List</a>
</section>
@endsection