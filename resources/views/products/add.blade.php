@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Add Products</h2>

   <form method="post" action="/console/products/add" novalidate class="w3-margin-bottom">

      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="name">Name:</label>
         <input type="text" name="name" id="name" value="<?= old('name') ?>" required>
         
         <?php if($errors->first('name')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('name'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="model">Model:</label>
         <input type="text" name="model" id="model" value="<?= old('model') ?>" required>
         
         <?php if($errors->first('model')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('model'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="brand_id">Brand:</label>
         <select name="brand_id" id="brand_id">
            <option>--Select Brand--</option>
            <?php foreach($brands as $brand): ?>
                  <option value="<?= $brand->id ?>"
                     <?= $brand->id == old('brand_id') ? 'selected' : '' ?>>
                     <?= $brand->name ?>
                  </option>
            <?php endforeach; ?>
         </select>
         <?php if($errors->first('brand_id')): ?>
            <br>
            <span class="w3-text-red"><?= $errors->first('brand_id'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="category_id">Category:</label>
         <select name="category_id" id="category_id">
            <option>--Select Category--</option>
            <?php foreach($categories as $category): ?>
                  <option value="<?= $category->id ?>"
                     <?= $category->id == old('category_id') ? 'selected' : '' ?>>
                     <?= $category->name ?>
                  </option>
            <?php endforeach; ?>
         </select>
         <?php if($errors->first('category_id')): ?>
            <br>
            <span class="w3-text-red"><?= $errors->first('category_id'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="description">Description:</label>
         <textarea name="description" id="description" required> <?= old('description') ?>
         </textarea>
         <?php if($errors->first('description')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('description'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="price">Price:</label>
         <input type="text" name="price" id="price" value="<?= old('price') ?>" required>
         
         <?php if($errors->first('price')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('price'); ?></span>
         <?php endif; ?>
      </div>

      <button type="submit" class="w3-button w3-green">Add Products</button>

   </form>

   <a href="/console/products/list">Back to Products List</a>
</section>
@endsection