<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webstrot.com/html/midadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:55:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

    <title>Mid Dashboard Template</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->

    <!-- Styles -->
    <link href="{{ asset('./css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/lib/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('./css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
</head>

<body>
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo text-6xl"><a href="index.html"></a>Mehdi:)</div>
            <ul class="mt-5">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-list"></i>Dashboard</a></li>
                <li><a href="{{ route('subscribe.section') }}"><i class="fa fa-list"></i>Subscribe</a></li>
                <li><a href="{{ route('media') }}"><i class="ti-view-list-alt"></i>Media</a></li>
                <li><a href="{{ route('templates.show') }}"><i class="fa fa-list"></i>Template</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->


<div class="header">
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="ml-auto">
                <form action="/logout" method="POST" class="my-3">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row" style="margin-left: 10rem">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-l-0 title-margin-left">
                    <div class="page-header page_header_2">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">home</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Subscribers </div>
                                    <div class="stat-digit">
                                        {{ $subscribe }}
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Template</div>
                                    <div class="stat-digit">
                                        {{ $template }}
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Media</div>
                                    <div class="stat-digit">
                                        {{ $template }}
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->




                <!-- jquery vendor -->
                <script src="{{ asset('./js/lib/jquery.min.js') }}"></script>
                <script src="{{ asset('./js/lib/jquery.nanoscroller.min.js') }}"></script>
                <!-- nano scroller -->
                <script src="{{ asset('./js/lib/menubar/sidebar.js') }}"></script>
                <script src="{{ asset('./js/lib/preloader/pace.min.js') }}"></script>
                <!-- sideb{{ asset('.') }}


                <script src="{{ asset('.') }}/js/lib/bootstrap.min.js">
</script><script src="{{ asset('.') }}/js/scripts.js"></script>

<!-- bootstrap -->

                <script src="{{ asset('./js/lib/circle-progress/circle-progress.min.js') }}"></script>
                <script src="{{ asset('./js/lib/circle-progress/circle-progress-init.js') }}"></script>

                <script src="{{ asset('./js/lib/morris-chart/raphael-min.js') }}"></script>


                <!--  flot-chart js -->
                <script src="{{ asset('./js/lib/flot-chart/jquery.flot.js') }}"></script>
                <script src="{{ asset('./js/lib/flot-chart/jquery.flot.resize.js') }}"></script>
                <!-- // flot-chart js -->


                <script src="{{ asset('./js/lib/vector-map/jquery.vmap.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/jquery.vmap.min.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.algeria.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.argentina.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.brazil.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.france.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.germany.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.greece.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.iran.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.iraq.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.russia.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.tunisia.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.europe.js') }}"></script>
                <!-- scripit init-->
                <script src="{{ asset('./js/lib/vector-map/country/jquery.vmap.usa.js') }}"></script>

                <script src="{{ asset('./js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
                <script src="{{ asset('./js/lib/weather/weather-init.js') }}"></script>
                <script src="{{ asset('./js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('./js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
                <!-- scripit init-->


                <script src="{{ asset('./js/dashboard1.js') }}"></script>
</body>


<!-- Mirrored from webstrot.com/html/midadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:55:12 GMT -->
</html>
