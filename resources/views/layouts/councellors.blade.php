@extends('layouts.app')
@section('content')
    <div>
        <section class=" bg-white p-5 m-5" id="concellor_section">
            <div class="row">
                @forelse ($councellors as $councellor)
                    <div class="col-lg-6">

                        <img src="{{ asset($councellor->imagePath) }}" class="bd-placeholder-img rounded-circle"
                            width="140" height="140">
                        <h2>{{ $councellor->name }}</h2>
                        <p>

                            {{ $councellor->description }}
                        </p>
                        <p>
                            <a class="btn btn-danger" href="mailto:{{ $councellor->email }}">Gmail</a>

                            <a class="btn btn-success" href="https://wa.me/{{ $councellor->phone }}">WhatsApp</a>
                        </p>
                    </div>
                @empty
                    <div class="container">No COUNCELLORS</div>
                @endforelse
            </div>
        </section>

    </div>
@endsection
