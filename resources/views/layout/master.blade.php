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
<footer class="footer">
    <div class="container">
        <ul>
            <li>This software calculates the inverse of an N*N matrix using the LU decomposition algorithm.</li>
            <li>The software is restricted to a maximum matrix dimension of 8*8.</li>
            <li>The execution time exceeds 30 seconds if the matrix dimension is more than 7.</li>
            <li>When you submit a matrix request, the result page shows the inverse, lower triangular, and upper triangular matrix of your request.</li>
            <li>Matrices with zero pivot problems are likely to crash during operation.</li>
        </ul>
    </div>
</footer>
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