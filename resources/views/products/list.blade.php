@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Manage Products</h2>

   <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
      <tr class="w3-red">
         <th></th>
         <th>Name</th>
         <th>Model</th>
         <th>Description</th>
         <th>Price</th>
         <th></th>
         <th></th>
         <th></th>
      </tr>
      <?php foreach($products as $product): ?>
         <tr>
            <td>
                  <?php if($product->image): ?>
                     <img src="{{asset('storage/'.$product->image)}}" width="200">
                  <?php endif; ?>
            </td>
            <td><?= $product->name ?></td>
            <td><?= $product->model ?></td>
            <td>
               <?= $temp = $product->description ?>
            </td>
            <td><?= $product->price ?></td>
            <td> <a href="/console/products/image/<?= $product->id ?>">Image</a> </td>
            <td>
               <a href="/console/products/edit/<?= $product->id ?>">Edit</a>
            </td>
            <td><a href="/console/products/delete/<?= $product->id ?>">Delete</a></td>
         </tr>
      <?php endforeach; ?>
   </table>

   <a href="/console/products/add" class="w3-button w3-green">New Products</a>

</section>
@endsection