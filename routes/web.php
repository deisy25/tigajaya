<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Review;

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\WebController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome', [
      'products' => Product:: all(),
   ]);
});

Route::post('/', function (){
   return view('welcome', [
      'users' => User::all(),
   ]);
});

Route::get('/signin', function (){
   return view('sign');
});

Route::get('/buy/{id}', function ($id){
   $product=Product::find($id);
   
   return view('buy', [
      'product' => $product,
   ]);
});

Route::get('/detail/{id}', function ($id){
   $product=Product::find($id);

   return view('detail', [
      'product' => $product,
   ]);
});

// Route::get('/review/{id}', function ($id){
//    // $review=Review::where('product_id', $id)->get();

//    return view('review',[
//       'review' => Review::All(),
//    ]);
// });


Route::get('addtolist','HomeController@wishlist');

Route::get('/wish', function (){
   $wishlist=Wishlist::where('user_id',auth()->user()->id)->get();

   return view('wish', [
      'wishlist' => $wishlist,
   ]);
});

Route::get('/confirm', function(){
   return view('confirm');
});

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/signin', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/signin', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

//users
Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

//brands
Route::get('/console/brands/list', [BrandsController::class, 'list'])->middleware('auth');
Route::get('/console/brands/add', [BrandsController::class, 'addForm'])->middleware('auth');
Route::post('/console/brands/add', [BrandsController::class, 'add'])->middleware('auth');
Route::get('/console/brands/edit/{brand:id}', [BrandsController::class, 'editForm'])->where('brand', '[0-9]+')->middleware('auth');
Route::post('/console/brands/edit/{brand:id}', [BrandsController::class, 'edit'])->where('brand', '[0-9]+')->middleware('auth');
Route::get('/console/brands/delete/{brand:id}', [BrandsController::class, 'delete'])->where('brand', '[0-9]+')->middleware('auth');

//categories
Route::get('/console/categories/list', [CategoriesController::class, 'list'])->middleware('auth');
Route::get('/console/categories/add', [CategoriesController::class, 'addForm'])->middleware('auth');
Route::post('/console/categories/add', [CategoriesController::class, 'add'])->middleware('auth');
Route::get('/console/categories/edit/{category:id}', [CategoriesController::class, 'editForm'])->where('category', '[0-9]+')->middleware('auth');
Route::post('/console/categories/edit/{category:id}', [CategoriesController::class, 'edit'])->where('category', '[0-9]+')->middleware('auth');
Route::get('/console/categories/delete/{category:id}', [CategoriesController::class, 'delete'])->where('category', '[0-9]+')->middleware('auth');

//products
Route::get('/console/products/list', [ProductsController::class, 'list'])->middleware('auth');
Route::get('/console/products/add', [ProductsController::class, 'addForm'])->middleware('auth');
Route::post('/console/products/add', [ProductsController::class, 'add'])->middleware('auth');
Route::get('/console/products/edit/{product:id}', [ProductsController::class, 'editForm'])->where('product', '[0-9]+')->middleware('auth');
Route::post('/console/products/edit/{product:id}', [ProductsController::class, 'edit'])->where('product', '[0-9]+')->middleware('auth');
Route::get('/console/products/delete/{product:id}', [ProductsController::class, 'delete'])->where('product', '[0-9]+')->middleware('auth');
Route::get('/console/products/image/{product:id}', [ProductsController::class, 'imageForm'])->where('product', '[0-9]+')->middleware('auth');
Route::post('/console/products/image/{product:id}', [ProductsController::class, 'image'])->where('product', '[0-9]+')->middleware('auth');

//reviews
Route::get('/console/reviews/list', [ReviewsController::class, 'list'])->middleware('auth');
Route::get('/console/reviews/add', [ReviewsController::class, 'addForm'])->middleware('auth');
Route::post('/console/reviews/add', [ReviewsController::class, 'add'])->middleware('auth');
Route::get('/console/reviews/edit/{review:id}', [ReviewsController::class, 'editForm'])->where('review', '[0-9]+')->middleware('auth');
Route::post('/console/reviews/edit/{review:id}', [ReviewsController::class, 'edit'])->where('review', '[0-9]+')->middleware('auth');
Route::get('/console/reviews/delete/{review:id}', [ReviewsController::class, 'delete'])->where('review', '[0-9]+')->middleware('auth');

//wishlists
Route::get('/console/wishlists/list', [WishlistsController::class, 'list'])->middleware('auth');
Route::get('/console/wishlists/add', [WishlistsController::class, 'addForm'])->middleware('auth');
Route::post('/console/wishlists/add', [WishlistsController::class, 'add'])->middleware('auth');
Route::get('/console/wishlists/edit/{wishlist:id}', [WishlistsController::class, 'editForm'])->where('wishlist', '[0-9]+')->middleware('auth');
Route::post('/console/wishlists/edit/{wishlist:id}', [WishlistsController::class, 'edit'])->where('wishlist', '[0-9]+')->middleware('auth');
Route::get('/console/wishlists/delete/{wishlist:id}', [WishlistsController::class, 'delete'])->where('wishlist', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');