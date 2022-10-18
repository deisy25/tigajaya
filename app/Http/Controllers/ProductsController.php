<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductsController extends Controller
{

   public function list()
   {
      return view('products.list', [
         'products' => Product::all()
      ]);
   }

   public function addForm()
   {
      return view('products.add', [
         'brands' => Brand::all(),
         'categories' => Category::all(),
      ]);
   }
   
   public function add()
   {
      $attributes = request()->validate([
         'name' => 'required',
         'model' => 'required',
         'brand_id' => 'required',
         'category_id' => 'required',
         'description' => 'required',
         'price' => 'required',
      ]);

      $product = new Product();
      $product->name = $attributes['name'];
      $product->model = $attributes['model'];
      $product->brand_id = $attributes['brand_id'];
      $product->category_id = $attributes['category_id'];
      $product->description = $attributes['description'];
      $product->price = $attributes['price'];
      $product->save();

      return redirect('/console/products/list')
         ->with('message', 'Product has been added!');
   }

   public function editForm(Product $product)
   {
      return view('products.edit', [
         'product' => $product,
         'brands' => Brand::all(),
         'categories' => Category::all(),
      ]);
   }

   public function edit(Product $product)
   {

      $attributes = request()->validate([
         'name' => 'required',
         'model' => 'required',
         'brand_id' => 'required',
         'category_id' => 'required',
         'description'=>'required',
         'price' => 'required',
      ]);

      $product->name = $attributes['name'];
      $product->model = $attributes['model'];
      $product->brand_id = $attributes['brand_id'];
      $product->category_id = $attributes['category_id'];
      $product->description = $attributes['description'];
      $product->price = $attributes['price'];
      $product->save();

      return redirect('/console/products/list')
         ->with('message', 'Product has been edited!');
   }

   public function delete(Product $product)
   {
      $product->delete();
      
      return redirect('/console/products/list')
         ->with('message', 'Product has been deleted!');        
   }

   public function imageForm(Product $product)
   {
      return view('products.image', [
         'product' => $product,
      ]);
   }

   public function image(Product $product)
   {

      $attributes = request()->validate([
         'image' => 'required|image',
      ]);

      Storage::delete($product->image);
   
      $path = request()->file('image')->store('products');

      $product->image = $path;
      $product->save();
      
      return redirect('/console/products/list')
         ->with('message', 'Products image has been edited!');
   }
   
}