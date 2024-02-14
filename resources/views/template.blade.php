<!DOCTYPE html>
<html lang="en">

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

<body class="bg-gray-800">
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo text-6xl"><a href="index.html"></a>Mehdi:)</div>
            <ul class="mt-5">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-list"></i>Subscribe</a></li>
                <li><a href="{{ route('subscribe.section') }}"><i class="fa fa-list"></i>Subscribe</a></li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i>Media</a></li>
                <li><a href="{{ route('templates.show') }}"><i class="fa fa-list"></i>Template</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->

<div class="w-5/12" style="margin-left: 28rem;margin-top: 5rem">
    <div class="backdrop-blur-sm border-2 border-solid border-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-2 text-white">
        <form action="{{ route('templates.store') }}" method="POST" enctype="multipart/form-data" class="container">

            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2 text-green-500">Name:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Template Name">
                @error('name')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-sm font-bold mb-2 text-green-500">Subject:</label>
                <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Template Subject">
                @error('subject')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-bold mb-2 text-green-500">Content:</label>
                <textarea id="content" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Template Content"></textarea>
                @error('content')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 text-white">
                <label for="image" class="block text-sm font-bold mb-2 text-green-500">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('image')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Template</button>
            </div>
        </form>
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


</html>

