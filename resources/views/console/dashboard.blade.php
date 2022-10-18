@extends('layout.console')

@section('content')
<section class="w3-padding">
   <div class='manage'>
      <button onclick="location.href='/console/brands/list'">Manage Brands</button>
      <button onclick="location.href='/console/categories/list'">Manage Categories</button>
      <button onclick="location.href='/console/products/list'">Manage Products</button>
      <button onclick="location.href='/console/reviews/list'">Manage Reviews</button>
      <button onclick="location.href='/console/users/list'">Manage Users</button>
      <button onclick="location.href='/console/wishlists/list'">Manage Wish Lists</button>
   </div>
</section>
@endsection