@include('admin_layout.header')
<!-- Start right Content here -->
<!-- Dropzone css -->
<link href="{{ asset('admin/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <button type="button" class="btn btn-raised btn-primary float-right" id="submitBtn">Save<div class="ripple-container">
                            </div></button>
                        <h4 class="mt-0 header-title">Edit product</h4>


                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabproduct" role="tab">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabdescription" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabimage" role="tab">Images</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabpricing" role="tab">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabmeta" role="tab">Meta</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        @foreach($product as $product)
                    
                        <form id="save_product" action="{{url('/admin/update_product/')}}{{'/'.$product->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                           
                                <div class="tab-pane active pt-3" id="tabproduct" role="tabpanel">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="product_category" class="bmd-label-floating">Product
                                                Category</label>
                                            <select class="form-control w-100" name="product_category_id"
                                                id="product_category">
                                                <option value="{{ $product->product_category_id }}">{{ $product->product_category }}</option>
                                                @foreach($pcategory as $pcat)
                                                    <option value="{{ $pcat->id }}">{{ $pcat->product_category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="product_name" class="bmd-label-floating">Product Name</label>
                                            <input type="text" class="form-control w-100" value="{{ $product->product_name }}" name="product_name"
                                                id="product_name">
                                        </div>
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="product_slug" class="bmd-label-floating">Slug</label>
                                            <input type="text" class="form-control w-100" value="{{ $product->product_slug }}" name="product_slug" id="product_slug">
                                        </div>
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="product_priority" class="bmd-label-floating">Priority</label>
                                            <input type="text" class="form-control w-100" value="{{ $product->priority }}" name="priority" id="product_priority">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="short_description" class="bmd-label-floating">Short
                                                Description</label>
                                            <textarea class="form-control w-100" name="short_description"
                                                id="short_description" rows="3">{{ $product->short_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane pt-3" id="tabdescription" role="tabpanel">
                                    <div class="row">
                                      
                                        <div class="form-group col-xl-12 col-12">
                                        <label for="product_overview" class="bmd-label-floating">Product Overview</label>
                                        <br>
                                             <textarea id="product_overview" name="product_overview">
                                             {{ $product->product_overview }}
                                            </textarea>
                                        </div>
                                        <div class="form-group col-xl-12 col-12">
                                        <label for="product_inclusion" class="bmd-label-floating">Inclusion & Exclusion</label>
                                        <br>
                                             <textarea id="product_inclusion" name="product_inclusion">
                                             {{ $product->product_inclusion }}
                                            </textarea>
                                        </div>
                                        <div class="form-group col-xl-12 col-12">
                                        <label for="product_faq" class="bmd-label-floating">Faq & Additional Information</label>
                                        <br>
                                             <textarea id="product_faq" name="product_faq">
                                             {{ $product->product_faq }}
                                            </textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane pt-3" id="tabimage" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 1</h4>
                                                    <p class="text-muted font-14">840px * 400px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image1) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image1_fill" value="{{ $product->product_image1 }}" name="product_image1_fill" />
                                                    <input type="file" id="product_image1" name="product_image1" class="dropify" />
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 1 Mobile</h4>
                                                    <p class="text-muted font-14">200px * 200px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image1mob) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image1mob_fill" value="{{ $product->product_image1mob }}" name="product_image1mob_fill" />
                                                    <input type="file" id="product_image1mob" name="product_image1mob" class="dropify" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 2</h4>
                                                    <p class="text-muted font-14">410px * 200px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image2) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image2_fill" value="{{ $product->product_image2 }}" name="product_image2_fill" />
                                                    <input type="file" id="product_image2" name="product_image2" class="dropify" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 2 Mobile</h4>
                                                    <p class="text-muted font-14">200px * 200px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image2mob) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image2mob_fill" value="{{ $product->product_image2mob }}" name="product_image2mob_fill" />
                                                    <input type="file" id="product_image2mob" name="product_image2mob" class="dropify" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 3</h4>
                                                    <p class="text-muted font-14">200px * 200px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image3) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image3_fill" value="{{ $product->product_image3 }}" name="product_image3_fill" />
                                                    <input type="file" id="product_image3" name="product_image3" class="dropify" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-6">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">product Image 4</h4>
                                                    <p class="text-muted font-14">200px * 200px</p>
                                                    <img src="{{ asset('uploads/product/'.$product->product_image4) }}" style="max-width:80px; margin-bottom:3px;">
                                                    <input type="hidden" id="product_image4_fill" value="{{ $product->product_image4 }}" name="product_image4_fill" />
                                                    <input type="file" id="product_image4" name="product_image4" class="dropify" />
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="tab-pane pt-3" id="tabpricing" role="tabpanel">
                                    <div class="row col-md-12">
                                    <div class="col-md-6">


<div class="form-group">
    <label for="exampleInputName3" class="bmd-label-floating">VAT</label>
    <select class="form-control w-100" name="product_tax_id" id="product_tax_id">
        <option value="{{$product->product_tax_id}}">{{$product->tax_name}}</option>
        @foreach($tax as $taxlist)
            <option value="{{ $taxlist->id }}">{{ $taxlist->tax_name }}
            </option>
        @endforeach
    </select>
</div>

<div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="fixed_price" <?php if ($product->fixed_price == 1) echo "checked='checked'"; ?>  id="fixed_price"> Fixed Price
                                                </label>
                                            </div>
                                            
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="private_item" <?php if ($product->private_item == 1) echo "checked='checked'"; ?> id="private_item"> Private Item
                                                </label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="sharing_item" <?php if ($product->sharing_item == 1) echo "checked='checked'"; ?> id="sharing_item"> Sharing Item
                                                </label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="child_price" <?php if ($product->child_price == 1) echo "checked='checked'"; ?> id="child_price"> Child Price
                                                </label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="hourly_price_cb" <?php if ($product->hourly_billing == 1) echo "checked='checked'"; ?> id="hourly_price_cb"> Hourly Price
                                                </label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="list_on_addon" <?php if ($product->list_on_addon == 1) echo "checked='checked'"; ?> id="list_on_addon"> List
                                                    on Addons
                                                </label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <label>
                                                    <input type="checkbox" name="product_page_listing" id="product_page_listing"> Product Page Listing 
                                                </label>
                                            </div>
                                           </div>
                                      <div class="col-md-6" id="hourly_price_div">
                                            <div class="form-group">
                                                <label for="regular_price_hour" class="bmd-label-floating">Regular Price
                                                    Per
                                                    1 Hour</label>
                                                <input type="number" class="form-control w-100"
                                                    name="regular_price_hour" value="{{ $product->regular_price_hour }}" id="regular_price_hour">
                                            </div>
                                            <div class="form-group">
                                                <label for="offer_price_hour" class="bmd-label-floating">Offer Price
                                                    Per
                                                    1 Hour</label>
                                                <input type="number" class="form-control w-100" value="{{ $product->offer_price_hour }}" id="offer_price_hour"
                                                    name="offer_price_hour">
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="item_price_div">

                                            <div class="form-group">
                                                <label for="regular_price_sharing_adult"
                                                    class="bmd-label-floating">Regular Price
                                                    Sharing
                                                    (Adult)</label>
                                                <input type="number" class="form-control w-100"
                                                    name="regular_price_sharing_adult" value="{{ $product->regular_price_sharing_adult }}" id="regular_price_sharing_adult">
                                            </div>
                                            <div class="form-group">
                                                <label for="offer_price_sharing_adult" class="bmd-label-floating">Offer
                                                    Price
                                                    Sharing (Adult)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="offer_price_sharing_adult" value="{{ $product->offer_price_sharing_adult }}" name="offer_price_sharing_adult">
                                            </div>
                                            <div class="form-group" id="regular_price_sharing_child_div">
                                                <label for="regular_price_sharing_child"
                                                    class="bmd-label-floating">Regular Price
                                                    Sharing (Child)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="regular_price_sharing_child" value="{{ $product->regular_price_sharing_child }}" name="regular_price_sharing_child">
                                            </div>

                                            <div class="form-group" id="offer_price_sharing_child_div">
                                                <label for="offer_price_sharing_child" class="bmd-label-floating">Offer
                                                    Price
                                                    Sharing (Child)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="offer_price_sharing_child" value="{{ $product->offer_price_sharing_child }}" name="offer_price_sharing_child">
                                            </div>
                                           </div>
                                           <div class="col-md-6" id="item_price_div_private">
                                            <div class="form-group">
                                                <label for="regular_price_private_adult"
                                                    class="bmd-label-floating">Regular Price
                                                    Private
                                                    (Adult)</label>
                                                <input type="number" class="form-control w-100"
                                                    name="regular_price_private_adult" value="{{ $product->regular_price_private_adult }}" id="regular_price_private_adult">
                                            </div>
                                            <div class="form-group">
                                                <label for="offer_price_private_adult" class="bmd-label-floating">Offer
                                                    Price
                                                    Private (Adult)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="offer_price_private_adult" value="{{ $product->offer_price_private_adult }}" name="offer_price_private_adult">
                                            </div>
                                            <div class="form-group" id="regular_price_private_child_div">
                                                <label for="regular_price_private_child"
                                                    class="bmd-label-floating">Regular Price
                                                    Private (Child)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="regular_price_private_child" value="{{ $product->regular_price_private_child }}" name="regular_price_private_child">
                                            </div>

                                            <div class="form-group" id="offer_price_private_child_div">
                                                <label for="offer_price_private_child" class="bmd-label-floating">Offer
                                                    Price
                                                    Private (Child)</label>
                                                <input type="number" class="form-control w-100"
                                                    id="offer_price_private_child" value="{{ $product->offer_price_private_child }}" name="offer_price_private_child">
                                            </div>


                                        </div>
                                        <div class="col-md-6" id="fixed_price_div">

                                            <div class="form-group">
                                                <label for="fixed_regular_price"
                                                    class="bmd-label-floating">Regular Price</label>
                                                <input type="number" class="form-control w-100"
                                                    name="fixed_regular_price" value="{{ $product->fixed_regular_price }}" id="fixed_regular_price">
                                            </div>
                                            <div class="form-group">
                                                <label for="fixed_offer_price" class="bmd-label-floating">Offer
                                                    Price</label>
                                                <input type="number" class="form-control w-100"
                                                    id="fixed_offer_price" value="{{ $product->fixed_offer_price }}" name="fixed_offer_price">
                                            </div>


                                        </div>
                      
                                    </div>
                                </div>

                                <div class="tab-pane pt-3" id="tabmeta" role="tabpanel">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="meta_title" class="bmd-label-floating">Meta Tilte</label>
                                            <input type="text" class="form-control w-100" value="{{$product->meta_title}}" id="meta_title" name="meta_title">
                                        </div>
                                        <div class="form-group col-xl-6 col-6">
                                            <label for="meta_keywords" class="bmd-label-floating">Meta
                                                Keywords</label>
                                            <input type="text" class="form-control w-100" value="{{$product->meta_keywords}}" id="meta_keywords" name="meta_keywords">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="meta_description" class="bmd-label-floating">Meta
                                                Description</label>
                                            <textarea class="form-control w-100" id="meta_description" value="{{$product->meta_description}}" name="meta_description"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                        </form>
         @endforeach
                    </div>
                </div>
            </div>



        </div>
        <!-- content -->

        <footer class="footer">
            © 2022 Duneride designed by Mentegoz.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

@include('admin_layout.scripts')

<script>
    $(document).ready(function () {

        var private_item= '<?php echo $product->private_item ?>';
        var sharing_item= '<?php echo $product->sharing_item ?>';
        var fixed_price= '<?php echo $product->fixed_price ?>';
        var child_price= '<?php echo $product->child_price ?>';
        var hourly_billing= '<?php echo $product->hourly_billing ?>';

          if(private_item==1)
          {
            $('#private_item').prop('checked', true);
          }
          if(sharing_item==1)
          {
            $('#sharing_item').prop('checked', true);
          }
          if(fixed_price==1)
          {
            $('#fixed_price').prop('checked', true);
          }
          if(child_price==1)
          {
            $('#child_price').prop('checked', true);
          }
          if(hourly_billing==1)
          {
            $('#hourly_price_cb').prop('checked', true);
          }
    

    
        $("#private_item").change(function() {
            if($(this).prop('checked')) {
                $('#regular_price_private_child_div').css('display', 'none');
                $('#offer_price_private_child_div').css('display', 'none');
                $('#regular_price_sharing_child_div').css('display', 'none');
                $('#offer_price_sharing_child_div').css('display', 'none');
                if($('#private_item').prop('checked')==true){
                    $('#item_price_div_private').css('display', 'block');
                } 
                if($('#private_item').prop('checked')==true && $('#sharing_item').prop('checked') ==true) {
                $('#item_price_div').css('display', 'block');
                $('#item_price_div_private').css('display', 'block');
                }
                 if($('#sharing_item').prop('checked')==false){
                    $('#item_price_div').css('display', 'none');
                }
                 if($('#sharing_item').prop('checked')==true){
                    $('#item_price_div').css('display', 'block');
                }
                 if($('#private_item').prop('checked')==false){
                    $('#item_price_div_private').css('display', 'none');
                }
                $('#hourly_price_div').css('display', 'none');
                } 
           
        });

        $("#sharing_item").change(function() {
            if($(this).prop('checked')) {
                $('#regular_price_private_child_div').css('display', 'none');
                $('#offer_price_private_child_div').css('display', 'none');
                $('#regular_price_sharing_child_div').css('display', 'none');
                $('#offer_price_sharing_child_div').css('display', 'none');
                if($('#private_item').prop('checked')==true){
                    $('#item_price_div_private').css('display', 'block');
                } 
                if($('#private_item').prop('checked')==true && $('#sharing_item').prop('checked') ==true) {
                $('#item_price_div').css('display', 'block');
                $('#item_price_div_private').css('display', 'block');
                }
                 if($('#sharing_item').prop('checked')==false){
                    $('#item_price_div').css('display', 'none');
                }
                 if($('#sharing_item').prop('checked')==true){
                    $('#item_price_div').css('display', 'block');
                }
                 if($('#private_item').prop('checked')==false){
                    $('#item_price_div_private').css('display', 'none');
                }
                $('#hourly_price_div').css('display', 'none');
                } 
           
        });
    
        $("#fixed_price").change(function() {
            if($(this).prop('checked')) {
                $('#hourly_price_cb').prop('checked', false);
                // $('#sharing_item').prop('checked', false);
                // $('#private_item').prop('checked', false);
                $('#item_price_div').css('display', 'none');
                $('#hourly_price_div').css('display', 'none');
                $('#fixed_price_div').css('display', 'block');
                $('#item_price_div_private').css('display', 'none');
                } else {
                $('#item_price_div').css('display', 'none');
                $('#hourly_price_div').css('display', 'none');
                $('#fixed_price_div').css('display', 'none');
                }
           
        });
        
        $("#child_price").change(function() {
            if($(this).prop('checked')) {
                //  $('#fixed_price').prop('checked', false);
                // $('#private_item').prop('checked', false);
                $('#regular_price_private_child_div').css('display', 'block');
                $('#offer_price_private_child_div').css('display', 'block');
                $('#regular_price_sharing_child_div').css('display', 'block');
                $('#offer_price_sharing_child_div').css('display', 'block');
                } else {
                $('#regular_price_private_child_div').css('display', 'none');
                $('#offer_price_private_child_div').css('display', 'none');
                $('#regular_price_sharing_child_div').css('display', 'none');
                $('#offer_price_sharing_child_div').css('display', 'none');
                }
           
        });
        $("#hourly_price_cb").change(function() {
            if($(this).prop('checked')) {
                $('#sharing_item').prop('checked', false);
                $('#private_item').prop('checked', false);
                $('#fixed_price').prop('checked', false);
                $('#child_price').prop('checked', false);
                $('#hourly_price_div').css('display', 'block');
                $('#regular_price_private_child_div').css('display', 'none');
                $('#offer_price_private_child_div').css('display', 'none');
                $('#regular_price_sharing_child_div').css('display', 'none');
                $('#offer_price_sharing_child_div').css('display', 'none');
                $('#item_price_div_private').css('display', 'none');
                } else {
                $('#fixed_price').prop('checked', true);
                }
           
        });
        $("#submitBtn").click(function () {
            $("#save_product").submit(); // Submit the form
        });
    });

</script>
<!-- Dropzone js -->
<script src="{{ asset('admin/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('admin/pages/upload-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script type="text/javascript">
    var useDarkMode = window.matchMedia("(prefers-color-scheme: dark)").matches;

    tinymce.init({
        selector: "textarea#product_overview",
        plugins: "print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
        imagetools_cors_hosts: ["picsum.photos"],
        menubar: "file edit view insert format tools table help",
        toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl",
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        importcss_append: true,
        templates: [

    {
      title: "Product Overview",
      description: "New List with dates",
      content:
        '<div class="col-lg-8"> <div class="base2-text" style="padding-top: 30px;"> <h3 class="overview-t1">Overview</h3> <p class="overview-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis sapiente maxime! Sapiente quas eaque sunt obcaecati tempora? Sit rem cupiditate error sed aliquid ullam iure nostrum dicta Lorem ipsum dolor sit, </p><div class="base2-inner-content"> <div class="left-section"> <h3 style="font-size: 16px;">Know before you go</h3> <div class="left-section-p" style="padding-top: 8px; color: #fff;"> <p style="margin-bottom: 0px;">Duration: 31-60 minutes</p><p style="margin-bottom: 0px;">Mobile tickets accepted</p><p style="margin-bottom: 0px;">Instant confirmation</p></div></div><div class="right-section"> <h3 style="font-size: 16px;">Cancellation policy</h3> <p style="color: #fff; padding-top: 8px; font-size: 0.9375rem;"> For a full refund, cancel at least 24 hours in <br/> advance of the start date of the experience. </p></div></div><h3 class="expected-h3">What to expect</h3> <p class="expect-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore tempora, odit deleniti numquam laborum explicabo. Excepturi, reiciendis consequatur exercitationem praesentium vel, at adipisci, natus tempora molestiae a ipsum eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore tempora Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. </p></div></div>'
    }
  ],
        template_cdate_format: "[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]",
        template_mdate_format: "[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]",
        height: 350,
        image_caption: true,
        quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: "sliding",
        contextmenu: "link image imagetools table",
        skin: useDarkMode ? "oxide-dark" : "oxide",
        content_css: useDarkMode ? "dark" : "default"
    });
    tinymce.init({
        selector: "textarea#product_inclusion",
        plugins: "print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
        imagetools_cors_hosts: ["picsum.photos"],
        menubar: "file edit view insert format tools table help",
        toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl",
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        importcss_append: true,
        templates: [

    {
      title: "Product Inclusion",
      description: "Product Inclusion & Exclusion",
      content:
        '<section id="inclusion" style="background-color: #000;"> <div class="container"> <div class="row"> <div class="col-md-12 col-lg-8"> <div class="base2-text"> <h3 class="inclusion-h3">Inclusion & Exclusion</h3> <p style="padding-top: 10px; text-align: justify; line-height: 28px; color: #fff;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis sapiente maxime! Sapiente quas eaque sunt obcaecati tempora? Sit rem cupiditate error sed aliquid ullam iure nostrum dicta Lorem ipsum dolor sit,Lorem ipsum dolor sit amet consectetur adipisicing elit. </p><div class="inclusion-exclusion"> <div class="left-inclusion"> <h3 style="padding-top: 15px; font-size: 16px;">Inclusion</h3> <ul class="inclusion-ul-text"> <li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li></ul> </div><div class="right-exclusion"> <h3 style="padding-top: 15px; font-size: 16px;">Exclusion</h3> <ul class="exclusion-ul-text"> <li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li><li>Lorem ipsum ipsum</li></ul> </div></div></div></div></div></div></section>'
    }
  ],
        template_cdate_format: "[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]",
        template_mdate_format: "[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]",
        height: 350,
        image_caption: true,
        quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: "sliding",
        contextmenu: "link image imagetools table",
        skin: useDarkMode ? "oxide-dark" : "oxide",
        content_css: useDarkMode ? "dark" : "default"
    });
    tinymce.init({
        selector: "textarea#product_faq",
        plugins: "print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
        imagetools_cors_hosts: ["picsum.photos"],
        menubar: "file edit view insert format tools table help",
        toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl",
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        importcss_append: true,
        templates: [

    {
      title: "Product Faq",
      description: "Product Faq & Additional Information",
      content:
        '<section id="faq" style="background: #000; padding-top: 50px;"> <div class="container"> <div class="row"> <div class="col-lg-8"> <h3 class="faq-h3">Faq</h3> <p class="faq-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis sapiente maxime! Sapiente quas eaque sunt obcaecati tempora? Sit rem cupiditate error sed aliquid ullam iure nostrum dicta Lorem ipsum dolor sit,Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></div><div class="col-lg-4"> <h3 class="information-h3">Additional Information</h3> <ul class="add-info additional-ul-text" style=""> <li>Confirmation will be received at time of booking</li><li>Not recommended for travelers with back problems</li><li>Confirmation will be received at time of booking</li><li>Confirmation will be received at time of booking</li><li>Confirmation will be received at time of booking</li><li>Confirmation will be received at time of booking</li></ul> </div></div></div></section>'
    }
  ],
        template_cdate_format: "[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]",
        template_mdate_format: "[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]",
        height: 350,
        image_caption: true,
        quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: "sliding",
        contextmenu: "link image imagetools table",
        skin: useDarkMode ? "oxide-dark" : "oxide",
        content_css: useDarkMode ? "dark" : "default"
    });

</script>
</body>

</html>
