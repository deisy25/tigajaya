<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Review;
use App\Models\User;
use App\Models\Product;

class ReviewsController extends Controller
{
   public function list()
   {
      return view('reviews.list', [
         'reviews' => Review::all()
      ]);
   }

   public function addForm()
   {

      return view('reviews.add', [
         'product' => Product::all(),
         'user' => User::all(),
      ]);
   }
   
   public function add()
   {
      $attributes = request()->validate([
         'product_id' => 'required',
         'user_id' => 'required',
         'rating' => 'required',
         'detail' => 'required',
      ]);

      $review = new Review();
      $review->product_id = $attributes['product_id'];
      $review->user_id = $attributes['user_id'];
      $review->rating = $attributes['rating'];
      $review->detail = $attributes['detail'];
      $review->save();

      return redirect('/console/reviews/list')
         ->with('message', 'Review has been added!');
   }

   public function editForm(Review $review)
   {
      return view('reviews.edit', [
         'review' => $review,
         'product' => Product::all(),
         'user' => User::all(),
      ]);
   }

   public function edit(Review $review)
   {

      $attributes = request()->validate([
         'product_id' => 'required',
         'user_id' => 'required',
         'rating' => 'required',
         'detail' => 'required',
      ]);

      $review->product_id = $attributes['product_id'];
      $review->user_id = $attributes['user_id'];
      $review->rating = $attributes['rating'];
      $review->detail = $attributes['detail'];
      $review->save();

      return redirect('/console/reviews/list')
         ->with('message', 'Review has been edited!');
   }

   public function delete(Review $review)
   {
      $review->delete();
      
      return redirect('/console/reviews/list')
         ->with('message', 'Review has been deleted!');        
   }
}
