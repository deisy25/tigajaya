@extends('layout.console')

@section('content')
<section class="w3-padding">

   <h2>Manage Reviews</h2>

   <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
      <tr class="w3-red">
         <th>Product Name</th>
         <th>Model</th>
         <th>Full Name</th>
         <th>Rating</th>
         <th>Comments</th>
         <th></th>
         <th></th>
      </tr>
      <?php foreach($reviews as $review): ?>
         <tr>
            <td><?= $review->product->name ?> </td>
            <td><?= $review->product->model ?> </td>
            <td><?= $review->user->firstname ?> <?= $review->user->lastname ?>  </td>
            <td><?= $review->rating ?></td>
            <td><?= $review->detail ?></td>
            <td>
               <a href="/console/reviews/edit/<?= $review->id ?>">Edit</a>
            </td>
            <td><a href="/console/reviews/delete/<?= $review->id ?>">Delete</a></td>
         </tr>
      <?php endforeach; ?>
   </table>

   <a href="/console/reviews/add" class="w3-button w3-green">New Reviews</a>

</section>
@endsection