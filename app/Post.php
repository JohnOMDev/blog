<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'body'];
   // if using mass assignment.. we will add category_id to the fillage
   function category()
   {
   	return $this->belongsTo(Category::class);
   }
}