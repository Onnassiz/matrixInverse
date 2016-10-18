<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Benz Matrix Inverter
    </title>

    {{--<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">--}}
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>

<body>
@yield('content')

<script src="{{ asset('js/jquery-min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--WOW Scroll Spy-->
<script src="{{ asset('js/wow.js') }}"></script>
<!-- Smooth Scroll -->
<script src="{{ asset('js/smooth-on-scroll.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.js') }}"></script>
<!-- All JS plugin Triggers -->
<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')
</body>
</html>