<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'product_id',
      'user_id',
      'rating',
      'detail',
   ];

   public function product()
   {
      return $this->belongsTo(Product::class, 'product_id');
   }

   public function user()
   {
      return $this->belongsTo(User::class, 'user_id');
   }
}