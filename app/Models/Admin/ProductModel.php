<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
      protected $table = 'product';
      protected $fillable = ['id','product_category_id', 'product_name', 'product_slug','priority', 'short_description', 'product_overview', 'product_inclusion', 'product_faq', 'product_image1', 'product_image1mob', 'product_image2', 'product_image2mob', 'product_image3', 'product_image4', 'regular_price_hour', 'offer_price_hour', 'regular_price_sharing_adult', 'offer_price_sharing_adult', 'regular_price_sharing_child', 'offer_price_sharing_child', 'regular_price_private_adult', 'offer_price_private_adult', 'regular_price_private_child', 'offer_price_private_child','fixed_regular_price','fixed_offer_price', 'product_tax_id','taxable','hourly_billing','private_item','sharing_item','fixed_price','child_price','product_page_listing', 'list_on_addon', 'meta_title', 'meta_keywords', 'meta_description', 'status'];
}
