<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TaxModel;
use App\Models\Admin\ProductCategoryModel;
use DB;
class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function add_product()
    {
         $tax=TaxModel::select('id','tax_name','tax_value')
         ->where('status','=',1)
         ->orderBy('priority', 'asc')
         ->get();
         $pcategory=ProductCategoryModel::select('id','product_category')
         ->where('status','=',1)
         ->orderBy('priority', 'asc')
         ->get();
        return view('admin.add_product',compact('tax','pcategory'));
    }
}
