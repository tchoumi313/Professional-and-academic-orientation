@extends('layouts.app')

@section('content')
    <div class="">
        <h2 class=" text-lg-center text-success p-1">DonaldT Discussion Forum</h2>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="media d-flex m-2">
                            <span>
                                <img class="mr-3 rounded-circle m-1" alt="Bootstrap Media Preview"
                                    style="width: 60px;height: 60px;" src="{{ asset('assets/images/logo.jpg') }}" />
                            </span>
                            <div class="media-body m-3 ">
                                <div class="">
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
                            </div>
                        </div>
                        <div class="card rounded-5 m-2">
                            <div class="card-header">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <div class="card-text p-2">
                                <p>
                                    {{ $post->body }}
                                </p>

                            </div>
                        </div>


                        <h2>Answers</h2>

                        @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                        <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Add a new comment" name="body"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-success rounded-circle" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
