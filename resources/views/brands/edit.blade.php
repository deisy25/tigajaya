@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Edit Brands</h2>

   <form method="post" action="/console/brands/edit/<?= $brand->id ?>" novalidate class="w3-margin-bottom">
      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="title">Name:</label>
         <input type="text" name="name" id="name" value="<?= old('name', $brand->name) ?>" required>
         
         <?php if($errors->first('name')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('name'); ?></span>
         <?php endif; ?>
      </div>

      <button type="submit" class="w3-button w3-green">Edit Brands</button>

   </form>

   <a href="/console/brands/list">Back to Brands List</a>
</section>
@endsection