<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use DB;

class ClientController extends Controller
{

    public function index()
    {
        $menu=ProductModel::select('product.product_name','product.product_slug','product_category.product_category')
        ->Join ('product_category','product.product_category_id','=','product_category.id')
        ->get();
        return view('client.index',compact('menu'));
    }
    public function services()
    {
        return view('client.services');
    }
    public function aboutus()
    {
        return view('client.aboutus');
    }
    public function contactus()
    {
        return view('client.contactus');
    }
    public function privacy()
    {
        return view('client.privacy');
    }
    public function product($slug)
    {
        $product=ProductModel::select('product.id','product.product_category_id','product.product_name','product.product_slug','product.priority','product.short_description','product.product_overview','product.product_inclusion','product.product_faq','product.product_image1','product.product_image1mob','product.product_image2','product.product_image2mob','product.product_image3','product.product_image4','product.regular_price_hour','product.offer_price_hour','product.regular_price_sharing_adult','product.offer_price_sharing_adult','product.regular_price_sharing_child','product.offer_price_sharing_child','product.regular_price_private_adult','product.offer_price_private_adult','product.regular_price_private_child','product.offer_price_private_child','product.fixed_regular_price','product.fixed_offer_price','product.product_tax_id','product.taxable','product.hourly_billing','product.list_on_addon','product.private_item','product.sharing_item','product.fixed_price','product.child_price','product.product_page_listing','product.meta_title','product.meta_keywords','product.meta_description','product.status','product.created_at','product_category.product_category','product_tax.tax_name','product_tax.tax_value')
        ->Join('product_tax','product.product_tax_id','=','product_tax_id')
        ->Join ('product_category','product.product_category_id','=','product_category.id')
        ->where('product.product_slug','=',$slug)
        ->limit(1)
        ->get();
        return view('client.product_details',compact('product'));
    }
    public function login()
    {
        return view('client.login');
    }

    public function terms()
    {
        return view('client.terms');
    }
}
