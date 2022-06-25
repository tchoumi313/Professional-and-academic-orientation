@foreach ($comments as $comment)
    <div class="card m-1 shadow-lg">
        <div class="display-comment" @if ($comment->parent_id != null) style="margin-left:40px;" @endif>
            <div class="media d-flex m-2">
                <span>
                    <img class="mr-3 rounded-circle m-1" alt="Bootstrap Media Preview" style="width: 60px;height: 60px;"
                        src="{{ asset('assets/images/logo.jpg') }}" />
                </span>
                <div class="media-body m-2 ">

                    <div class="d-block">

                        <h5>{{ $comment->user->name }}
                            @if ($post->user->role == 1)
                                <span>(Admin)</span>
                            @elseif ($post->user->role == 2)
                                <span>(Councellor)</span>)
                            @endif
                        </h5>

                        <p>{{ $comment->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 m-2 ">
            <span><b>Answer :</b>
            </span>
            <p>
                {{ $comment->body }}
            </p>

        </div>

        {{-- <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a> --}}
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" placeholder="Reply" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning rounded-circle" value="Reply" />
            </div>
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
    </div>
@endforeach
