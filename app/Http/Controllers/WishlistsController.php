<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;

class WishlistsController extends Controller
{

   public function list()
   {
      return view('wishlists.list', [
         'wishlists' => Wishlist::all()
      ]);
   }

   public function addForm()
   {
      return view('wishlists.add', [
         'user' => User::all(),
         'product' => Product::all(),
      ]);
   }
   
   public function add()
   {
      $attributes = request()->validate([
         'product_id' => 'required',
         'user_id' => 'required',
      ]);

      $wishlist = new Wishlist();
      $wishlist->product_id = $attributes['product_id'];
      $wishlist->user_id = $attributes['user_id'];
      $wishlist->save();

      return redirect('/console/wishlists/list')
         ->with('message', 'Wishlist has been added!');
   }

   public function editForm(Wishlist $wishlist)
   {
      return view('wishlists.edit', [
         'wishlist' => $wishlist,
         'user' => User::all(),
         'product' => Product::all(),
      ]);
   }

   public function edit(Wishlist $wishlist)
   {

      $attributes = request()->validate([
         'product_id' => 'required',
         'user_id' => 'required',
      ]);

      $wishlist->product_id = $attributes['product_id'];
      $wishlists->user_id = $attributes['user_id'];
      $wishlist->save();

      return redirect('/console/wishlists/list')
         ->with('message', 'Wishlist has been edited!');
   }

   public function delete(Wishlist $wishlist)
   {
      $wishlist->delete();
      
      return redirect('/console/wishlists/list')
         ->with('message', 'Wishlist has been deleted!');        
   }
   
}