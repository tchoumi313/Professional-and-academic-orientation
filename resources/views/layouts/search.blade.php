@extends('layouts.app')

@section('content')
    <div class="bg-white p-1 m-1">
        <h2>University</h2>
        <hr>
        <div class=" container row">
            @forelse ($universites as $universite)
                <div class="card col-lg-5">
                    <div class="d-flex shadow-md p-1 m-1">

                        <img class="p-1 m-1" src="{{ Storage::url($universite->imagePath) }}" alt="univ image"
                            height="100" width="100">

                        <h3>{{ $universite->name }}</h3>
                    </div>

                    <div>
                        <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"
                            href="{{ route('facultes', ['universite' => $universite->id]) }}">Show
                            more</a>
                    </div>
                </div>
            @empty
                <div class="p-5 m-5">
                    <h2>No University Found</h2>
                </div>
            @endforelse

            <hr>

            <h2 class=" justify-center">Faculty</h2>
            <hr>
            @forelse ($facultes as $faculte)
                <div class="card col-lg-5">
                    <div class="d-flex shadow-md p-1 m-1">

                        <img src="{{ Storage::url($faculte->imagePath) }}" alt="univ image" height="100" width="100">

                        <h3>{{ $faculte->name }}</h3>
                    </div>

                    <div>
                        <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"
                            href="{{ route('filieres', ['faculte' => $faculte->id]) }}">Show
                            more</a>
                    </div>
                </div>
            @empty
                <div class="p-5 m-5">
                    <h2>No Faculty Found</h2>
                </div>
            @endforelse
            <hr>

            <h2>Filieres</h2>
            <hr>
            @forelse ($filieres as $filiere)
                <div class="card col-lg-5">
                    <div class="d-block shadow-md p-1 m-1">

                        <h3>{{ $filiere->name }}</h3>


                        <a href="#" class="stretched-link p-2">PreInscription</a>
                    </div>
                </div>
            @empty
                <div class="p-5 m-5">
                    <h2>No Filiere Found</h2>
                </div>
            @endforelse
            <hr>

            <h2>Comments</h2>
            <hr>
            @forelse ($posts as $post)
                <div class="d-flex col-lg-5">
                    <div class="d-flex">
                        <span>
                            <img class="mr-3 rounded-circle m-1" alt="Bootstrap Media Preview"
                                style="width: 60px;height: 60px;" src="{{ asset('assets/images/logo.jpg') }}" />
                        </span>
                        <div class="d-block">


                            <h5>{{ $post->user }}</h5>

                            <p>{{ $post->created_at }}</p>
                        </div>
                    </div>
                    <div>
                        <h3>{{ $post->title }}</h3>
                    </div>

                    <div>
                        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary ">View
                            Post</a>
                    </div>
                </div>
            @empty
                <div class="p-5 m-5">
                    <h2>No Comment Found</h2>
                </div>
            @endforelse
        </div>

    </div>
@endsection
