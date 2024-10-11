<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:120px;height:120px" class="me-3 avatar-sm rounded-circle object-fit-cover"
                    src="{{$user->getImageURL()}}" alt="{{$user->name}}">
                <div>
                    <h3 class="card-title mb-0"><a href="#"> {{$user->name}}
                        </a></h3>
                    <span class="fs-6 text-muted">{{$user->email}}</span>
                </div>
            </div>
            @auth
                @can('update', $user)
                    <div>
                        <a href="{{route('users.edit', $user->id)}}">Edit</a>
                    </div>
                @endcan
            @endauth
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>
            <p class="fs-6 fw-light">
                {{$user->bio}}
            </p>
            @include('users.shared.user-state')
            @auth
                @if(Auth::user()->isNot($user))
                    @if(Auth::user()->follows($user))
                    <div class="mt-3">
                        <form action="{{route('users.unfollow', $user->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm"> UnFollow </button>
                        </form>
                    </div>
                    @else
                    <div class="mt-3">
                        <form action="{{route('users.follow', $user->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-primary btn-sm"> Follow </button>
                        </form>
                    </div>
                    @endif
                @endif
            @endauth
        </div>
    </div>
</div>
