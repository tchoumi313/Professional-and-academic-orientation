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

<body class="body">
    {{-- <div class="container"> --}}
    <div class="min-h-screen bg-gray-100">

        <header class="bg-white">
            @include('layouts.navigation')

            <div class="card text-md-center font-bold">
                {{-- < class="container"> --}}
                <img id="bg-img" style="height: 50vh" src="{{ asset('assets/images/landingImages/03.jpg') }}"
                    alt="" />
                <div class="card-img-overlay container text-dark text-capitalize text-center">
                    <div class="d-flex position-absolute top-0 start-100 translate-middle">
                        <button style="width: 100px; margin:5px;"
                            class="btn btn-sm btn-outline-dark btn-info text-white btn-lg">Sign
                            Up Now</button>
                        <button style="width: 100px;margin:5px;"
                            class="btn btn-sm btn-outline-dark btn-info text-white btn-lg">Login</button>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Page Heading -->


    <!-- Page Content -->
    <main class="p-3">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>

</html>
