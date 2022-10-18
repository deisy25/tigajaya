@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Add Users</h2>

   <form method="post" action="/console/users/add" novalidate class="w3-margin-bottom">
      <?= csrf_field() ?>

      <div class="w3-margin-bottom">
         <label for="firstname">First Name:</label>
         <input type="text" name="firstname" id="firstname" value="<?= old('firstname') ?>" required>
         
         <?php if($errors->first('firstname')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('firstname'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="lastname">Last Name:</label>
         <input type="text" name="lastname" id="lastname" value="<?= old('lastname') ?>" required>
         
         <?php if($errors->first('lastname')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('lastname'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="email">email:</label>
         <input type="text" name="email" id="email" value="<?= old('email') ?>" required>
         
         <?php if($errors->first('email')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('email'); ?></span>
         <?php endif; ?>
      </div>

      <div class="w3-margin-bottom">
         <label for="password">password:</label>
         <input type="password" name="password" id="password" required>
         
         <?php if($errors->first('password')): ?>
               <br>
               <span class="w3-text-red"><?= $errors->first('password'); ?></span>
         <?php endif; ?>
      </div>

      <button type="submit" class="w3-button w3-green">Add Users</button>

   </form>

   <a href="/console/users/add" class="w3-button w3-green">New Users</a>

</section>
@endsection