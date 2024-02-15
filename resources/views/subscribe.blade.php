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

{{--<form action="{{ route('subscribe') }}" method="POST" class="wrapper w-full flex">

    @csrf
    <div class="content">
        <header>
            <h1>Subscribe Us</h1>
        </header>
        <section>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
        </section>
        <div>
            <input type="email" name="email" placeholder="Enter your email" value="">
            @error('email')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
            <button style="padding: 12px;color: white;background-color: #0d71bb;border-radius: 26px;text-decoration: none">Subscribe</button>
        </div>
    </div>
</form>--}}
<div class="col-lg-6" style="margin-left: 21rem;margin-top: 5rem">
    <div class="card">
        <div class="card-title">
            <h4>New Orders</h4>
        </div>

        <div class="card-body">
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
                                <span class="badge badge-warning">Pending</span>
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

