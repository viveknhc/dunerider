@include('admin_layout.header') 
 <!-- DataTables -->
 <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
 <link href="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- Start right Content here -->
<style>
    .meterial_icons{
        font-size: 20px;
    
    }
    .meterial_icons1{
        font-size: 24px;
    
    }
</style>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="card m-b-30">
                                        <div class="card-body table-responsive">
                                            <h5 class="header-title">Product Listing</h5>
                                            <button type="button" class="btn btn-raised btn-info float-right" onclick="location.href = '{{url('admin/add_product')}}';">Add</button>
                                            
                                            <div class="">
                                                <table id="datatable2" class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Product Name</th>
                                                        <th>Link</th>
                                                        <th>Product Category</th>
                                                        <th>VAT</th>
                                                        <th>Image</th>
                                                        <th>List in addons</th>
                                                        <th>Upload date</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
    
    
                                                    <tbody>
                                                    @foreach($product as $pdct)
                                                    <tr>
                                                        <td>{{ @$slno +=1; }}</td>
                                                        <td>{{ $pdct->product_name }}</td>
                                                        <td><a href="{{url('product/'.$pdct->product_slug)}}" class="btn btn-info " target="_blank">Link</a></td>
                                                        <td>{{ $pdct->product_category }}</td>
                                                        <td>{{ $pdct->tax_name}}</td>
                                                        <td>{{ $pdct->product_image1 }}</td>
                                                        <td>{{ $pdct->list_on_addon }}</td>
                                                        <td>{{ $pdct->created_at }}</td>
                                                        <td>{{ $pdct->status }}</td>
                                                        <td><a href="{{route('edit_product.edit',$pdct->id)}}" class="mdi mdi-tooltip-edit meterial_icons"></a></td>
                                                        <td><a href="#" class="mdi mdi-delete-forever meterial_icons1"></a></td>
                                                    </tr>
                                                    @endforeach
                                                   
                                                    </tbody>
                                                </table>
                                            </div>           
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->

                
                </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->

                <footer class="footer">
                    © 2022 Duneride by Mentegoz.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        @include('admin_layout.scripts') 
 
                 <!-- Required datatable js -->
        <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
 
        <!-- Datatable init js -->
        <script src="{{asset('admin/pages/datatables.init.js')}}"></script>
       
    </body>

</html>