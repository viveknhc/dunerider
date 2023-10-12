<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{
      protected $table = 'product_category';
      protected $fillable = ['id','product_category','priority','status'];
}
