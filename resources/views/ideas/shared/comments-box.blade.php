<div>
    @auth
    <form action="{{route('ideas.comments.store', $idea->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
        </div>
    </form>
    @endauth
    <hr>
    @forelse($idea->comments as $comment)
    <div class="d-flex align-items-start">
        <img style="width:35px;height:35px;" class="me-2 avatar-sm rounded-circle object-fit-cover"
            src="{{$comment->user->getImageURL()}}"
            alt="{{$comment->user->name}}">
        <div class="w-100">
            <div class="d-flex justify-content-between">
                <a class="" href="{{route('users.show', $comment->user->id)}}">{{$comment->user->name}}</a>
                <small class="fs-6 fw-light text-muted">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
            <p class="fs-6 mt-3 fw-light">
                {{$comment->content}}
            </p>
        </div>
    </div>
    @empty
        <p class="text-center mt-4">No Comments Found.</p>
    @endforelse
</div>
