<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Admin\TaxModel;
use App\Models\Admin\ProductCategoryModel;
use App\Models\Admin\ProductModel;
use Illuminate\Support\Str;
use DB;
class ProductController extends Controller
{
    public function index()
    {
      $product=ProductModel::select('product.id','product.product_category_id','product.product_name','product.product_slug','product.priority','product.short_description','product.product_overview','product.product_inclusion','product.product_faq','product.product_image1','product.product_image1mob','product.product_image2','product.product_image2mob','product.product_image3','product.product_image4','product.regular_price_hour','product.offer_price_hour','product.regular_price_sharing_adult','product.offer_price_sharing_adult','product.regular_price_sharing_child','product.offer_price_sharing_child','product.regular_price_private_adult','product.offer_price_private_adult','product.regular_price_private_child','product.offer_price_private_child','product.fixed_regular_price','product.fixed_offer_price','product.product_tax_id','product.taxable','product.hourly_billing','product.list_on_addon','product.private_item','product.sharing_item','product.fixed_price','product.child_price','product.product_page_listing','product.meta_title','product.meta_keywords','product.meta_description','product.status','product.created_at','product_category.product_category','product_tax.tax_name','product_tax.tax_value')
      ->Join('product_tax','product.product_tax_id','=','product_tax.id')
      ->Join ('product_category','product.product_category_id','=','product_category.id')
      ->orderBy('product.priority', 'asc')
      ->orderBy('product.id', 'DESC')
      ->get();
      return view('admin.product',compact('product'));
    }
    public function edit($id)
    {
      $tax=TaxModel::select('id','tax_name','tax_value')
         ->where('status','=',1)
         ->orderBy('priority', 'asc')
         ->get();
         $pcategory=ProductCategoryModel::select('id','product_category')
         ->where('status','=',1)
         ->orderBy('priority', 'asc')
         ->get();
         $product=ProductModel::select('product.id','product.product_category_id','product.product_name','product.product_slug','product.priority','product.short_description','product.product_overview','product.product_inclusion','product.product_faq','product.product_image1','product.product_image1mob','product.product_image2','product.product_image2mob','product.product_image3','product.product_image4','product.regular_price_hour','product.offer_price_hour','product.regular_price_sharing_adult','product.offer_price_sharing_adult','product.regular_price_sharing_child','product.offer_price_sharing_child','product.regular_price_private_adult','product.offer_price_private_adult','product.regular_price_private_child','product.offer_price_private_child','product.fixed_regular_price','product.fixed_offer_price','product.product_tax_id','product.taxable','product.hourly_billing','product.list_on_addon','product.private_item','product.sharing_item','product.fixed_price','product.child_price','product.product_page_listing','product.meta_title','product.meta_keywords','product.meta_description','product.status','product.created_at','product_category.product_category','product_tax.tax_name','product_tax.tax_value')
         ->Join('product_tax','product.product_tax_id','=','product_tax.id')
         ->Join ('product_category','product.product_category_id','=','product_category.id')
         ->where('product.id','=',$id)
         ->limit(1)
         ->get();
      return view('admin.edit_product',compact('product','tax','pcategory'));
    }
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'product_image1' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image2' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image3' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image4' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image1mob' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image2mob' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        
             $data = new ProductModel;
             $data->product_category_id=$request->product_category_id;
             $data->product_name=$request->product_name;
             if($request->product_slug !='')
             {
                $data->product_slug=Str::slug($request->product_slug);
             }else{
                $data->product_slug=Str::slug($request->product_name);
             }
             
             $data->priority=$request->priority;
             $data->short_description=$request->short_description;
             $data->product_overview=$request->product_overview;
             $data->product_inclusion=$request->product_inclusion;
             $data->product_faq=$request->product_faq;
             if($request->hasfile('product_image1'))
             {
             $file=$request->file('product_image1');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image1=$filename;    
             }
             else{
             $data->product_image1=''; 
             }
             if($request->hasfile('product_image1mob'))
             {
             $file=$request->file('product_image1mob');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image1mob=$filename;    
             }
             else{
             $data->product_image1mob=''; 
             }

             if($request->hasfile('product_image2'))
             {
             $file=$request->file('product_image2');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image2=$filename;    
             }
             else{
             $data->product_image2=''; 
             }

             if($request->hasfile('product_image2mob'))
             {
             $file=$request->file('product_image2mob');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image2mob=$filename;    
             }
             else{
             $data->product_image2mob=''; 
             }
             if($request->hasfile('product_image3'))
             {
             $file=$request->file('product_image3');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image3=$filename;    
             }
             else{
             $data->product_image3=''; 
             }
             if($request->hasfile('product_image4'))
             {
             $file=$request->file('product_image4');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image4=$filename;    
             }
             else{
             $data->product_image4=''; 
             }

             $data->regular_price_hour=$request->regular_price_hour;
             $data->offer_price_hour=$request->offer_price_hour;
             $data->regular_price_sharing_adult=$request->regular_price_sharing_adult;
             $data->offer_price_sharing_adult=$request->offer_price_sharing_adult;
             $data->regular_price_sharing_child=$request->regular_price_sharing_child;
             $data->offer_price_sharing_child=$request->offer_price_sharing_child;
             $data->regular_price_private_adult=$request->regular_price_private_adult;
             $data->offer_price_private_adult=$request->offer_price_private_adult;
             $data->regular_price_private_child=$request->regular_price_private_child;
             $data->offer_price_private_child=$request->offer_price_private_child;



             $data->fixed_offer_price=$request->fixed_offer_price;
             $data->fixed_regular_price=$request->fixed_regular_price;


             
             $data->product_tax_id=$request->product_tax_id;
             if($request->product_tax_id !=1 OR $request->product_tax_id =='')
             {
                $data->taxable=1;
             }else{
                $data->taxable=0;
             }
             if($request->hourly_price_cb =='on')
             {
                $data->hourly_billing=1;
             }else{
                $data->hourly_billing=0;
             }
             if($request->private_item =='on')
             {
                $data->private_item=1;
             }else{
                $data->private_item=0;
             }
             if($request->sharing_item =='on')
             {
                $data->sharing_item=1;
             }else{
                $data->sharing_item=0;
             }
             if($request->fixed_price =='on')
             {
                $data->fixed_price=1;
             }else{
                $data->fixed_price=0;
             }
             if($request->child_price =='on')
             {
                $data->child_price=1;
             }else{
                $data->child_price=0;
             }
             if($request->product_page_listing =='on')
             {
                $data->product_page_listing=1;
             }else{
                $data->product_page_listing=0;
             }
             if($request->list_on_addon =='on')
             {
                $data->list_on_addon=1;
             }else{
                $data->list_on_addon=0;
             }





             $data->meta_title=$request->meta_title;
             $data->meta_keywords=$request->meta_keywords;
             $data->meta_description=$request->meta_description;
             $data->status=1;
             $data->save();
             return redirect()->back()->with('success', 'Product Added Succesfully');
    }
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'product_image1' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image2' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image3' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image4' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image1mob' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'product_image2mob' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        
             $data =ProductModel::findOrFail($id);
             $data->product_category_id=$request->product_category_id;
             $data->product_name=$request->product_name;
             if($request->product_slug !='')
             {
                $data->product_slug=Str::slug($request->product_slug);
             }else{
                $data->product_slug=Str::slug($request->product_name);
             }
             
             $data->priority=$request->priority;
             $data->short_description=$request->short_description;
             $data->product_overview=$request->product_overview;
             $data->product_inclusion=$request->product_inclusion;
             $data->product_faq=$request->product_faq;
         
             if($request->hasfile('product_image1') && $request->file('product_image1') !='')
             {
             $file=$request->file('product_image1');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image1=$filename;    
             }
             else{
             $data->product_image1=$request->product_image1_fill; 
             }
             if($request->hasfile('product_image1mob') && $request->file('product_image1mob') !='')
             {
             $file=$request->file('product_image1mob');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image1mob=$filename;    
             }
             else{
             $data->product_image1mob=$request->product_image1mob_fill; 
             }

             if($request->hasfile('product_image2') && $request->file('product_image2') !='')
             {
             $file=$request->file('product_image2');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image2=$filename;    
             }
             else{
             $data->product_image2=$request->product_image2_fill; 
             }

             if($request->hasfile('product_image2mob') && $request->file('product_image2mob') !='')
             {
             $file=$request->file('product_image2mob');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image2mob=$filename;    
             }
             else{
             $data->product_image2mob=$request->product_image2mob_fill; 
             }
             if($request->hasfile('product_image3')&& $request->file('product_image3') !='')
             {
             $file=$request->file('product_image3');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image3=$filename;    
             }
             else{
             $data->product_image3=$request->product_image3_fill; 
             }
             if($request->hasfile('product_image4')&& $request->file('product_image4') !='')
             {
             $file=$request->file('product_image4');
             $extension=$file->getClientOriginalExtension();
             $filename=Str::random(5)."-".date('his')."-".Str::random(3).".".$extension;
             $file->move('uploads/product',$filename);
             $data->product_image4=$filename; 
               
             }
             else{
             $data->product_image4=$request->product_image4_fill; 
            //  dd($request->product_image4_fill);
            // exit(); 
             }
            
             $data->regular_price_hour=$request->regular_price_hour;
             $data->offer_price_hour=$request->offer_price_hour;
             $data->regular_price_sharing_adult=$request->regular_price_sharing_adult;
             $data->offer_price_sharing_adult=$request->offer_price_sharing_adult;
             $data->regular_price_sharing_child=$request->regular_price_sharing_child;
             $data->offer_price_sharing_child=$request->offer_price_sharing_child;
             $data->regular_price_private_adult=$request->regular_price_private_adult;
             $data->offer_price_private_adult=$request->offer_price_private_adult;
             $data->regular_price_private_child=$request->regular_price_private_child;
             $data->offer_price_private_child=$request->offer_price_private_child;
             

             $data->fixed_offer_price=$request->fixed_offer_price;
             $data->fixed_regular_price=$request->fixed_regular_price;


             
             $data->product_tax_id=$request->product_tax_id;
             if($request->product_tax_id !=1 OR $request->product_tax_id =='')
             {
                $data->taxable=1;
             }else{
                $data->taxable=0;
             }
             if($request->hourly_price_cb =='on')
             {
                $data->hourly_billing=1;
             }else{
                $data->hourly_billing=0;
             }
             if($request->private_item =='on')
             {
                $data->private_item=1;
             }else{
                $data->private_item=0;
             }
             if($request->sharing_item =='on')
             {
                $data->sharing_item=1;
             }else{
                $data->sharing_item=0;
             }
             if($request->fixed_price =='on')
             {
                $data->fixed_price=1;
             }else{
                $data->fixed_price=0;
             }
             if($request->child_price =='on')
             {
                $data->child_price=1;
             }else{
                $data->child_price=0;
             }
             if($request->product_page_listing =='on')
             {
                $data->product_page_listing=1;
             }else{
                $data->product_page_listing=0;
             }
             if($request->list_on_addon =='on')
             {
                $data->list_on_addon=1;
             }else{
                $data->list_on_addon=0;
             }


             $data->meta_title=$request->meta_title;
             $data->meta_keywords=$request->meta_keywords;
             $data->meta_description=$request->meta_description;
             $data->status=1;
             $data->save();
             return redirect()->back()->with('success', 'Product Updated Succesfully');
    }
    public function distroy()
    {

    }
}