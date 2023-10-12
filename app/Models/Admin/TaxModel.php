<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxModel extends Model
{
      protected $table = 'product_tax';
      protected $fillable = ['id','tax_name','tax_value','priority','status'];
}
