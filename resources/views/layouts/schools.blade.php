@extends('layouts.app')

@section('content')
    <section class=" bg-white p-1 m-1 bg-transparent" id="concellor_section">
        @forelse ($universites as $universite)
            <div class="container my-5 bg-white">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-6 ">
                        <h1 class="display-4 fw-bold lh-1">{{ $universite->name }}</h1>
                        <p class="lead">{{ $universite->description }}</p>

                        <p class="lead">{{ $universite->location }}</p>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                            <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"
                                href="{{ route('facultes', ['universite' => $universite->id]) }}">Show
                                more</a>
                            {{-- <a class="btn btn-primary"
                                    href="{{ Storage::download($universite->pdfFilePath, $universite->name) }}">Click to
                                    Download descriptif pdf...</a> --}}
                        </div>
                    </div>

                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{ Storage::url($universite->imagePath) }}" style="border-radius: 40px;"
                            class="d-block mx-lg-auto img-fluid p-2 rounded-3" alt="Images" width="700" height="500"
                            loading="lazy">
                    </div>
                </div>
            </div>

        @empty
            <h1>No School for now</h1>
        @endforelse
    </section>
@endsection
