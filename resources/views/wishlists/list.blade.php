@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Manage Wish Lists</h2>

   <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
      <tr class="w3-red">
         <th></th>
         <th>Product Name</th>
         <th>Full name</th>
         <th></th>
         <th></th>
      </tr>
      <?php foreach($wishlists as $wishlist): ?>
         <tr>
            <td>
               <?php if($wishlist->product->image): ?>
                  <img src="{{asset('storage/'.$wishlist->product->image)}}" width="200">
               <?php endif; ?>
            </td>
            <td> <?= $wishlist->product->name ?></td>
            <td><?= $wishlist->user->firstname ?> <?= $wishlist->user->lastname ?></td>

            <td>
               <a href="/console/wishlists/edit/<?= $wishlist->id ?>">Edit</a>
            </td>
            <td><a href="/console/wishlists/delete/<?= $wishlist->id ?>">Delete</a></td>
         </tr>
      <?php endforeach; ?>
   </table>

   <a href="/console/wishlists/add" class="w3-button w3-green">New WishLists</a>

</section>
@endsection