<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webstrot.com/html/midadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:56:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mid Dashboard Template</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('./images/favicon.png') }}" />
    <!-- Styles -->
    <link href="{{ asset('./css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/lib/font-awesome.min.css') }}" rel="stylesheet"/>
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

<div class="col-lg-6" style="margin-left: 21rem;margin-top: 5rem">
    <div class="card">
        <div class="card-title">
            <h4>New Orders</h4>
        </div>

        <div class="card-body">
            <button onclick="window.location='{{ route('generate.pdf') }}'" aria-expanded="false" aria-haspopup="menu" id=":r5:"
                    class="relative middle none font-sans font-medium text-center uppercase transition-all
                        disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px]
                        h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10
                        active:bg-blue-gray-500/30" type="button">
                  <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg enable-background="new 0 0 50 50" height="30px" id="Layer_1"
                         version="1.1" viewBox="0 0 50 50" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="43" cy="21" r="2"/><path d="M40,15V1H10v14" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M40,29v20H10V29H40z" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M10,40H3  c-1.104,0-2-0.896-2-2V17c0-1.104,0.896-2,2-2h44c1.104,0,2,0.896,2,2v21c0,1.104-0.896,2-2,2h-7" fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" x1="35" x2="15" y1="35" y2="35"/><line fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" x1="31" x2="15" y1="39" y2="39"/><line fill="none" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" x1="35" x2="15" y1="43" y2="43"/></svg>
                  </span>
            </button>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($subscribes as $subscribe)
                        <tr>
                            <td>{{ $subscribe->id }}</td>
                            <td>{{ $subscribe->email }}</td>
                            <td>
                                <span class="badge badge-warning ">{{ $subscribe->status }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- jquery vendor -->
<script src=" {{ asset('./js/lib/jquery.min.js') }}"></script>
<script src=" {{ asset('./js/lib/jquery.nanoscroller.min.js') }}"></script>
<!-- nano scroller -->
<script src=" {{ asset('./js/lib/menubar/sidebar.js') }}"></script>
<script src=" {{ asset('./js/lib/preloader/pace.min.js') }}"></script>
<!-- sidebar -->


<script src=" {{ asset('./js/lib/bootstrap.min.js') }}">
</script><script src=" {{ asset('./js/scripts.js') }}"></script>

<!-- bootstrap -->

<script src=" {{ asset('./js/lib/circle-progress/circle-progress.min.js') }}"></script>
<script src=" {{ asset('./js/lib/circle-progress/circle-progress-init.js') }}"></script>

<script src=" {{ asset('./js/lib/morris-chart/raphael-min.js') }}"></script>
<script src=" {{ asset('./js/lib/morris-chart/morris.js') }}"></script>

<!--  flot-chart js -->
<script src=" {{ asset('./js/lib/flot-chart/jquery.flot.js') }}"></script>
<script src="/js/lib/flot-chart/jquery.flot.resize.js"></script>
<!-- // flot-chart js -->


<script src=" {{ asset('./js/lib/vector-map/jquery.vmap.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/jquery.vmap.min.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.algeria.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.argentina.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.brazil.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.france.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.germany.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.greece.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.iran.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.iraq.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.russia.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.tunisia.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.europe.js') }}"></script>
<!-- scripit init-->
<script src=" {{ asset('./js/lib/vector-map/country/jquery.vmap.usa.js') }}"></script>

<script src=" {{ asset('./js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
<script src=" {{ asset('./js/lib/weather/weather-init.js') }}"></script>
<script src=" {{ asset('./js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
<script {{ asset('./js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
<!-- scripit init-->

<script src=" {{ asset('./js/dashboard1.js') }}"></script>

</body>


<!-- Mirrored from webstrot.com/html/midadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:56:36 GMT -->
</html>

