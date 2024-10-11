<div class="card mt-3">
    <div class="card-header pb-0 border-0">
        <h5 class="">Top Users</h5>
    </div>
    <div class="card-body">
        @foreach($topUsers as $user)
        <div class="hstack gap-2 mb-3">
            <div class="avatar">
                <a href="{{route('users.show', $user->id)}}"><img style="width:50px;height:50px;object-fit:cover" class="avatar-img rounded-circle"
                        src="{{$user->getImageURL()}}" /></a>
            </div>
            <div class="overflow-hidden">
                <a class="h6 mb-0" href="{{route('users.show', $user->id)}}">{{$user->name}}</a>
                <p class="mb-0 small text-truncate">{{$user->email}}</p>
            </div>
        </div>
        @endforeach
        <div class="d-grid mt-3">
            <a class="btn btn-sm btn-primary-soft" href="#!">{{__('idea.show_more')}}</a>
        </div>
    </div>
</div>
