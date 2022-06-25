@extends('layouts.app')

@section('content')
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-lg-center display-4 text-white">Forum</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">
                    Created Post
                </a>
                <form method="GET" class="mb-5 p-5" action="{{ route('posts.search') }}">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search"
                            aria-describedby="button-addon2" id="search">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>

                @foreach ($posts as $post)
                    <div class="col card shadow-lg d-flex align-items-start m-3">
                        <div class="d-flex">
                            <span>
                                <img class="mr-3 rounded-circle m-1" alt="Bootstrap Media Preview"
                                    style="width: 60px;height: 60px;" src="{{ asset('assets/images/logo.jpg') }}" />
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
                            <p><span>Post: </span>{{ $post->body }}</p>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary ">View
                                Post</a>
                        </div>
                    </div>
                @endforeach


                {{-- <table class="table table-bordered">
                    <thead>
                        <th width="80px">Id</th>
                        <th>Title</th>
                        <th width="150px">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                                        class="btn btn-primary">View
                                        Post</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table> --}}
            </div>
        </div>
    </div>
@endsection
