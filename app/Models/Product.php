<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'name',
      'model',
      'image',
      'brand_id',
      'category_id',
      'description',
      'price',
   ];

   public function brand()
   {
      return $this->belongsTo(Brand::class, 'brand_id');
   }

   public function category()
   {
      return $this->belongsTo(Category::class, 'category_id');
   }

   public function wishlist()
   {
      return $this->hasMany(Wishlist::class);
   }

   public function review()
   {
      return $this->hasMany(Review::class);
   }
}