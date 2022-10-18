<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    $user = User::orderBy('created_at')->get();

    return $user;

});

Route::get('/products', function(){
    $product = Product::orderBy('created_at')->get();

    return $product;

});

Route::get('/products/detail/{product?}', function(Product $product){
    if($product['image'])
    {
        $product['image'] = env('APP_URL').'storage/'.$product['image'];
    }

    return $product;

});
