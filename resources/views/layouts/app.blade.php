<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!--Script-->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="body" style="height:100%;background-color :black;background-image: url({{ asset('assets/images/site/4n.jpg') }});
background-size: fill;
 background-position: center;
  ">
    <header class="bg-white">
        @include('layouts.navigation')


    </header>
    <div class="container min-h-screen bg-gray-100 bg-transparent">
        {{-- <div class="min-h-screen bg-gray-100"> --}}





        @yield('content')

    </div>

    @include('layouts.footer')
</body>

</html>
