@extends('layouts.app')
@section('content')
    <div>
        <section class=" bg-white p-5 m-5" id="concellor_section">
            <div class="container my-5 bg-indigo">
                <div>
                    <h1 class="display-4 fw-bold lh-1">{{ $concours->name }}</h1>
                    <h4 class=" ">{{ $concours->universite->name }} </h4>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-6 ">

                        <div>
                            <p class="lead">{{ $concours->description }}</p>

                            <p class="lead">{{ $concours->descriptionG }}</p>

                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                            <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" href=""> PréIncription</a>
                            {{-- <a class="btn btn-primary"
                                href="{{ Storage::download($concours->pdfFilePath, $concours->name) }}">Click to
                                Download descriptif pdf...</a> --}}
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection
