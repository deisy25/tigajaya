@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Edit Categories</h2>

   <form method="post" action="/console/categories/edit/<?= $category->id ?>" novalidate class="w3-margin-bottom">
      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="title">Name:</label>
         <input type="text" name="name" id="name" value="<?= old('name', $category->name) ?>" required>
         
         <?php if($errors->first('name')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('name'); ?></span>
         <?php endif; ?>
      </div>

      <button type="submit" class="w3-button w3-green">Edit Categories</button>

   </form>

   <a href="/console/categories/list">Back to Categories List</a>
</section>
@endsection