@extends('layouts.app')
@section('content')
    <section class="bg-white p-2 m-2">
        <div>
            <h2> {{ $faculte->name }}</h2>
            <hr>
            <div class="row mb-2">
                @forelse ($faculte->filieres as $filiere)
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">

                                <h3 class="d-inline-block mb-2 text-primary">{{ $filiere->name }}</h3>

                                <p class="card-text mb-auto">{{ $filiere->description }}</p>
                                <a href="{{ $filiere->linkPreInscription }}" class="stretched-link">PreInscription</a>
                            </div>
                            <div class="col-10 col-sm-8 col-lg-6">
                                <img src="{{ Storage::url($filiere->imagePath) }}" style="border-radius: 40px;"
                                    class="d-block mx-lg-auto img-fluid p-2 rounded-3" alt="Image" width="700" height="500"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>No Filiere for now</h1>
                @endforelse

            </div>
        </div>
    </section>
@endsection
