@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="mb-3" style="justify-content: center">
                            <img id="app_logo" style="border-radius: 50px; margin:2px; float:left "
                                src="{{ asset('assets/images/logo.jpg') }}" alt="App Logo " width="70px" />
                            <h2 style="font-size: 25px">Professional and Academic Orientation</h2>
                        </div>
                    </div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name">{{ __('Name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="email">{{ __('Email Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class=" mb-3">
                                <label for="password">{{ __('Password') }}</label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class=" mb-3">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="mb-3">
                                <label for="birthdate">{{ __('Birth Date') }}</label>


                                <input id="birthdate" type="date"
                                    class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                    value="{{ old('birthdate') }}" required autocomplete="birthdate">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="phone">{{ __('Phone Number') }}</label>


                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span>Enter your number with the country indicator eg 2376..</span>

                            </div>
                            <div class="mb-3">
                                <label for="address">{{ __('Address') }}</label>


                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            {{-- <div class="mb-3">
                                <label for="image">{{ __('Image') }}</label>


                                <input id="image" type="file" class="form-control @error('birthdate') is-invalid @enderror"
                                    name="image" value="{{ old('image') }}">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div> --}}
                            <input type="number" name="role" id="role" value="0" hidden>

                            <div class="mb-0">
                                <div class="col-md-6 offset-md-4 d-flex">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <a href="{{ route('welcome') }}" style="width:100px;margin:5px;"
                                        class="btn btn-sm btn-outline-dark btn-info text-white btn-lg">Back</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
