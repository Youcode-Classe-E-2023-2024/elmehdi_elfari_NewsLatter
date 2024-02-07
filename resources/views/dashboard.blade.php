<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webstrot.com/html/midadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:55:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-list"></i>Subscribe</a></li>
                <li><a href="{{ route('sub') }}"><i class="fa fa-list"></i>Subscribe</a></li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i>Media</a></li>
                <li><a href="form-validation.html"><i class="fa fa-list"></i>Template</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->


<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="search_wrap d-none d-sm-block d-md-block d-lg-block d-xl-block">
                        <div class="inbox-head top_search">
                            <form action="#" class=" position inbox_input">
                                <div class="input-append inner-append border_11">
                                    <input type="text" class="sr-input" placeholder="Search Mail">
                                    <button class="btn sr-btn append-btn btn33" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/3.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/3.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/3.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/3.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-email"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/1.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/2.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/3.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="{{ asset('./images/avatar/2.jpg') }}" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <img class="pro_pic" src="{{ asset('./images/icon1.jpg') }}" alt="">
                            <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Upgrade Now</span>
                                    <p class="trial-day">30 Days Trail</p>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-lock"></i>
                                                <span>Lock Screen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search_wrap d-block d-sm-none d-md-none d-lg-none d-xl-none">
                    <div class="inbox-head top_search">
                        <form action="#" class=" position inbox_input">
                            <div class="input-append inner-append border_11">
                                <input type="text" class="sr-input" placeholder="Search Mail">
                                <button class="btn sr-btn append-btn btn33" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
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
                                    <div class="stat-text">Today Expenses </div>
                                    <div class="stat-digit">
                                        <i class="fa fa-usd"></i>8500</div>
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
                                    <div class="stat-text">Income Detail</div>
                                    <div class="stat-digit">
                                        <i class="fa fa-usd"></i>7800</div>
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
                                    <div class="stat-text">Task Completed</div>
                                    <div class="stat-digit">
                                        <i class="fa fa-usd"></i> 500</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="stat-content">
                                    <div class="stat-text">Task Completed</div>
                                    <div class="stat-digit">
                                        <i class="fa fa-usd"></i>650</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
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
