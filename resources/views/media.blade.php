<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webstrot.com/html/midadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:56:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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

<body class="bg-gray-400">
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
<div class="flex flex-wrap" style="margin-left: 18rem">
    @foreach ($templates as $template)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mx-3 my-4 bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
            @if($template->getFirstMedia('media'))
                <img class="w-full h-32 object-cover" src="{{ $template->getFirstMedia('media')->getUrl() }}" alt="Template Image">
            @endif
            <div class="px-4 py-2">
                <div class="font-bold text-lg mb-2">{{ $template->subject }}</div>
                <p class="text-gray-700 text-sm">{{ $template->content }}</p>
            </div>
                <form action="{{ route('upload.delete',  $template->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-500 inline-block py-2 px-6 my-2 ml-5 border border-[#E5E7EB] rounded-full text-base text-white font-medium hover:border-primary hover:bg-primary transition">
                        Delete
                    </button>
                </form>

        </div>
    @endforeach
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


