<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DesertHunt Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('admin/plugins/fullcalendar/vanillaCalendar.css')}}"/>
        <link rel="stylesheet" href="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/morris/morris.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/metro/MetroJs.min.css')}}">

        <link rel="stylesheet" href="{{asset('admin/plugins/carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/carousel/owl.theme.default.min.css')}}">

        <link rel="stylesheet" href="{{asset('admin/plugins/animate/animate.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap-material-design.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('admin/css/icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" type="text/css">
<style>
    .logo-large {
    height: 75px;
    }
</style>
{{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <style>
                    .logo img{
                        max-width: 120px;
                    }
                </style>
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
                        <a href="#" class="logo">
                            <img src="{{asset('client/images/logo-deserts.png')}}" alt="logo" >
                            
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard
                                        <span class="badge badge-pill badge-primary float-right">7</span>
                                    </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-animation"></i>
                                    <span> Product </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url('/admin/product/')}}">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/admin/add_product/')}}">Add</a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <!-- <li class="menu-title">Components</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-animation"></i>
                                    <span> UI Elements </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="ui-badge.html">Badge</a>
                                    </li>
                                    <li>
                                        <a href="ui-alertify.html">Alertify</a>
                                    </li>
                                    <li>
                                        <a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="ui-carousel.html">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="ui-dropdowns.html">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="ui-typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="ui-cards.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="ui-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="ui-rating.html">Rating</a>
                                    </li>
                                    <li>
                                        <a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                    </li>
                                    <li>
                                        <a href="ui-modals.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="ui-images.html">Images</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="ui-progressbars.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="ui-pagination.html">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="ui-rangeslider.html">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="ui-navs.html">Navs</a>
                                    </li>
                                    <li>
                                        <a href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-table"></i>
                                    <span> Tables </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatable.html">Data Table</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-cards"></i>
                                    <span> Forms </span>
                                    <span class="badge badge-pill badge-info float-right">8</span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="form-elements.html">Form Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.html">Form Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.html">Form Advanced</a>
                                    </li>
                                    <li>
                                        <a href="form-mask.html">Form Mask</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.html">Form Editors</a>
                                    </li>
                                    <li>
                                        <a href="form-uploads.html">Form File Upload</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-emoticon-poop"></i>
                                    <span> Icons </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="icons-material.html">Material Design</a>
                                    </li>
                                    <li>
                                        <a href="icons-fontawesome.html">Font Awesome</a>
                                    </li>
                                    <li>
                                        <a href="icons-themify.html">Themify Icons</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-chart-areaspline"></i>
                                    <span> Charts </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="charts-morris.html">Morris Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-chartist.html">Chartist Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-chartjs.html">Chartjs Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-flot.html">Flot Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-c3.html">C3 Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-xchart.html">X Chart</a>
                                    </li>
                                    <li>
                                        <a href="charts-other.html">Jquery Knob Chart</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-map-marker-multiple"></i>
                                    <span> Maps </span>
                                    <span class="badge badge-pill badge-danger float-right">2</span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="maps-google.html"> Google Map</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html"> Vector Map</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-layers"></i>
                                    <span> Pages </span>
                                    <span class="float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->