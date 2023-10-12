       <!-- jQuery  -->
       <script src="{{asset('admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/js/popper.min.js')}}"></script>
        <script src="{{asset('admin/js/bootstrap-material-design.js')}}"></script>
        <script src="{{asset('admin/js/modernizr.min.js')}}"></script>
        <script src="{{asset('admin/js/detect.js')}}"></script>
        <script src="{{asset('admin/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/js/waves.js')}}"></script>
        <script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>


        <script src="{{asset('admin/plugins/carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('admin/plugins/fullcalendar/vanillaCalendar.js')}}"></script>
        <script src="{{asset('admin/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('admin/plugins/chartist/js/chartist.min.js')}}"></script>
        <script src="{{asset('admin/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{asset('admin/plugins/metro/MetroJs.min.js')}}"></script>
        <script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('admin/pages/dashborad.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

        <script>
        $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
        toastr.options = {
        "preventDuplicates": true
         }
        });

       </script>