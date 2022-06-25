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

<body class="" style="height:100%;background-color :black;background-image: url({{ asset('assets/images/site/3nice.jpg') }});
   background-size: fill;
    background-position: center;
     ">
    <div>
        <div class="d-flex">


            <div class="container">
                {{-- <div class="min-h-screen bg-gray-100"> --}}

                <header class="bg-white">
                    @include('layouts.navigation')
                </header>

                <!-- Page Content -->
                {{-- <main class="p-3"> --}}
                <hr>



                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/site/4n.jpg') }} " class="bd-placeholder-img"
                                width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                preserveAspectRatio="xMidYMid slice" focusable="false">



                            <div class="container">
                                <div class="carousel-caption text-xxl-start">
                                    <h1
                                        style="color: white ; font-size: 60px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ">
                                        Professional and Academic
                                        Orientation</h1>
                                    <p style="font-size: 30px">Some representative placeholder content for the first
                                        slide of the carousel.</p>
                                    <div class="d-flex">
                                        @guest
                                            <p><a class="btn btn-lg btn-primary m-2" href="{{ route('register') }}">Sign
                                                    up
                                                    today</a></p>
                                            <p><a class="btn btn-lg btn-primary m-2" href="{{ route('login') }}">Login
                                                    Now</a>
                                            </p>
                                        @endguest
                                        @auth

                                        @endauth

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/site/Sbg1.jpg') }} " class="bd-placeholder-img"
                                width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                preserveAspectRatio="xMidYMid slice" focusable="false">


                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Get To Know Our Schools</h1>
                                    <h2>
                                        <p>We offer you differents school affordable in Cameroon in particular and
                                            abroad
                                        </p>
                                    </h2>
                                    <p><a class="btn btn-lg btn-primary" href="{{ route('schools') }}">Learn more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/landingImages/03.jpg') }} " class="bd-placeholder-img"
                                width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                preserveAspectRatio="xMidYMid slice" focusable="false">


                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>Councellors</h1>
                                    <h2>
                                        <p>Contact a councellor and get to know what could be better for you</p>
                                    </h2>
                                    <p><a class="btn btn-lg btn-primary" href="{{ route('councellors') }}">Contact
                                            now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div>
                    <hr>
                </div>



                <div>
                    <hr>
                </div>



                <article class="">

                    <section class=" bg-white p-5 m-5" id="concellor_section">
                        <div class="container my-5 bg-indigo">
                            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                                <div class="col-lg-6 ">
                                    <p class=" text-lg text-capitalize ">
                                        Over time, it has been noticed that after obtaining their baccalaureate, young
                                        people are subjected to an embarrassment of choices as to what will happen to
                                        their future, this creates a disorder in them. In addition, being new to the
                                        subject, they need lighting, especially not all of them have the possibility of
                                        having knowledgeable people nearby who can help them. Still others are ashamed
                                        to meet face-to-face with guidance counsellors. As it is often said, "Knowledge
                                        is good, but knowledge is better."; It is with a view to supporting, giving
                                        hope to these young people and their loved ones, we have set up the project to
                                        create our academic and professional orientation website.
                                    </p>
                                </div>

                                <div class="col-10 col-sm-8 col-lg-6">
                                    <img src="{{ asset('assets/images/landingImages/02.jpg') }}"
                                        style="border-radius: 40px;" class="d-block mx-lg-auto img-fluid p-2 rounded-3"
                                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SERVICES-->
                    <section>
                        <div class="row bg-white">
                            <h2>Services</h2>
                            <hr>
                            <div class="col-lg-4 shadow-lg bg-white m-0">
                                <img src="{{ asset('assets/images/site/Sbg1.jpg') }} " class="bd-placeholder-img"
                                    width="100%" height="140" role="img" aria-label="Placeholder: 140x140"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <h2>Public Schools</h2>
                                <p>A public university is a university owned by the state or that receives significant
                                    public funds through a national, territorial or regional government, as opposed to a
                                    private university.</p>
                                <p><a class="btn btn-secondary" href="{{ route('schools') }}">View details</a></p>
                            </div><!-- /.col-lg-4 -->

                            <div class="col-lg-4 shadow-lg bg-white m-0">
                                <img src="{{ asset('assets/images/landingImages/concours.jpg') }} "
                                    class="bd-placeholder-img" width="100%" height="140"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">




                                <h2>COMPETITIVE EXAMS</h2>
                                <p>Get to know competitive exams in Cameroon and register to them</p>
                                <p><a class="btn btn-secondary" href="{{ route('concours') }}">Vew details</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 shadow-lg bg-white m-0">
                                <img src="{{ asset('assets/images/landingImages/03.jpg') }} "
                                    class="bd-placeholder-img" width="100%" height="140"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <h2>COUNCELLORS</h2>
                                <p>Contact a councellor and get to know what could be better for you</p>
                                <p><a class="btn btn-secondary" href="{{ route('councellors') }}">View details
                                    </a></p>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>

                    </section>


                    <div>
                        <hr>
                    </div>
                    <!--Commentaires-->
                    <section>
                        <div class="row bg-white">
                            <h2>Commentaires</h2>
                            <hr>


                            @forelse ($posts as $post)
                                <div class="col card shadow-lg d-flex align-items-start m-3">
                                    <div class="d-flex">
                                        <span>
                                            <img class="mr-3 rounded-circle m-1" alt="Bootstrap Media Preview"
                                                style="width: 60px;height: 60px;"
                                                src="{{ asset('assets/images/logo.jpg') }}" />
                                        </span>
                                        <div class="d-block">


                                            <h5>{{ $post->user->name }}
                                                @if ($post->user->role == 1)
                                                    <span>(Admin)</span>
                                                @elseif ($post->user->role == 2)
                                                    <span>(Councellor)</span>)
                                                @endif
                                            </h5>

                                            <p>{{ $post->created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h4 class="fw-bold mb-0"><span>Title: </span>{{ $post->title }}</h4>
                                        <p><span>Post: </span>{{ $post->title }}</p>
                                        <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                                            class="btn btn-primary ">View
                                            Post</a>
                                    </div>
                                </div>
                            @empty
                                <h1>NO COMMENT</h1>
                            @endforelse
                        </div>

                    </section>

                </article>

            </div>


        </div>
    </div>

    {{-- </main> --}}
    </div>
    @include('layouts.footer')
    <script type="text/javascript">
        window.onpageshow = function(evt) {
            // If persisted then it is in the page cache, force a reload of the page.
            if (evt.persisted) {
                document.body.style.display = "none";
                location.reload();
            }
        };
    </script>

</body>

</html>
