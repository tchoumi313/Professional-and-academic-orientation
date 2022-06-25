@extends('layouts.app')
@section('content')
    <section class=" bg-white p-5 m-5" id="concellor_section">
        <div class="container my-5 bg-indigo">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-15 ">
                    <h1 class="display-4 fw-bold lh-1">{{ $universite->name }}</h1>
                    <p class="lead">{{ $universite->description }}</p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        {{-- <a class="btn btn-primary"
                            href="{{ Storage::download($universite->pdfFilePath, $universite->name) }}">Click to
                            Download descriptif pdf...</a> --}}
                    </div>
                </div>

                <div class="col-10 col-sm-8 col-lg-6">
                    {{-- <img src="{{ asset($universite->imagePath) }}" style="border-radius: 40px;"
                        class="d-block mx-lg-auto img-fluid p-2 rounded-3" alt="Bootstrap Themes" width="700" height="500"
                        loading="lazy"> --}}
                </div>
            </div>
        </div>


        <div>
            @forelse ($facultes as $faculte)
                <div class="container my-5 bg-indigo">
                    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                        <div class="col-lg-6 ">
                            <h1 class="display-4 fw-bold lh-1">{{ $faculte->name }}</h1>
                            <p class="lead">{{ $faculte->description }}</p>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                                <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"
                                    href="{{ route('filieres', ['faculte' => $faculte->id]) }}">Show
                                    more</a>
                                {{-- <a class="btn btn-primary"
                                        href="{{ Storage::download($faculte->pdfFilePath, $faculte->name) }}">Click
                                        to
                                        Download descriptif pdf...</a> --}}
                            </div>
                        </div>
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="{{ Storage::url($faculte->imagePath) }}" style="border-radius: 40px;"
                                class="d-block mx-lg-auto img-fluid p-2 rounded-3" alt="Image" width="700" height="500"
                                loading="lazy">
                        </div>
                    </div>
                </div>

            @empty
                <h1>No Faculty for now</h1>
            @endforelse
        </div>

    </section>
@endsection
