{{-- <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
</div>
<nav class="navbar navbar-dark bg-info">
    <div class="container-fluid">
        <div class="img float-left">
            <img id="app_logo" style="border-radius: 50px; margin:2px; float:left "
                src="{{ asset('assets/images/logo.jpg') }}" alt="App Logo " width="70px" />

            <h1
                style="font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ">
                Professional and Academic
                Orientation
            </h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
{{-- </nav> --}}
<nav class="navbar navbar-light fixed bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img id="app_logo" style="border-radius: 50px; margin:2px; float:left "
                src="{{ asset('assets/images/logo.jpg') }}" alt="App Logo " width="70px" />

            <h1
                style="color:#fff ; font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ">
                Professional and Academic
                Orientation
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schools') }}">Cameroon Schools</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('councellors') }}" tabindex="-1"
                        aria-disabled="true">Councellors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('posts.index') }}" tabindex="-1"
                        aria-disabled="true">Discuss
                        With
                        Others</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin') }}" tabindex="-1" aria-disabled="true">Admin
                        Panel</a>
                </li>

            </ul>
            <form class="d-flex" action="{{ route('search') }} " method="post">
                @csrf
                <input name="search" class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>


            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                        @if (Auth::user()->role == 1)
                            <span>(Admin)</span>
                        @elseif (Auth::user()->role == 2)
                            <span>(Councellor)</span>)
                        @endif
                    </a>

                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                                                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
</nav>
