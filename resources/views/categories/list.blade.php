@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Manage Categories</h2>

   <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
      <tr class="w3-red">
         <th>Name</th>
         <th></th>
         <th></th>
      </tr>
      <?php foreach($categories as $category): ?>
         <tr>
            <td><?= $category->name ?></td>
            <td><a href="/console/categories/edit/<?= $category->id ?>">Edit</a></td>
            <td><a href="/console/categories/delete/<?= $category->id ?>">Delete</a></td>
         </tr>
      <?php endforeach; ?>
   </table>

   <a href="/console/categories/add" class="w3-button w3-green">New Categories</a>

</section>
@endsection