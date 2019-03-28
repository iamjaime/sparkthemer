<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel Spark Theme by iamjaime">
    <meta name="author" content="iamjaime">
    <title>@yield('title', config('app.name'))</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
    <link rel="stylesheet" href="assets/libs/swiper/dist/css/swiper.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/purpose.css" id="stylesheet">
{{--<link rel="stylesheet" href="css/app.css" id="stylesheet">--}}

<!-- Scripts -->
@stack('scripts')

<!-- Global Spark Object -->
    <script>
        window.Spark = @json(array_merge(Spark::scriptVariables(), []));
    </script>

</head>

<body>
<div id="spark-app" v-cloak>
    @yield('content')
    @include('spark::layouts.footers.footer')
</div>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="js/purpose.js"></script>

<!--Spark -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/sweetalert.min.js"></script>

</body>

</html>