@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Manage Brands</h2>

   <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
      <tr class="w3-red">
         <th>Name</th>
         <th></th>
         <th></th>
      </tr>
      <?php foreach($brands as $brand): ?>
         <tr>
            <td><?= $brand->name ?></td>
            <td><a href="/console/brands/edit/<?= $brand->id ?>">Edit</a></td>
            <td><a href="/console/brands/delete/<?= $brand->id ?>">Delete</a></td>
         </tr>
      <?php endforeach; ?>
   </table>

   <a href="/console/brands/add" class="w3-button w3-green">New Brands</a>

</section>
@endsection