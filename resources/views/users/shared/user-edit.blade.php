<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" action="{{route('users.update', $user->id)}}" method="post">
            @csrf
            @method('put')
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:120px;height:120px" class="me-3 avatar-sm rounded-circle object-fit-cover"
                        src="{{$user->getImageURL()}}" alt="Mario Avatar">
                    <div>
                        <input name="name" value="{{$user->name}}" type="text" class="form-control">
                        @error('name')
                            <span class="text-danger fs-6"> {{$message}} </span>
                        @enderror
                    </div>
                </div>
                @auth
                    @if(Auth::id() === $user->id)
                        <div>
                            <a href="{{route('users.show', $user->id)}}">View</a>
                        </div>
                    @endif
                @endauth
            </div>
            <div class="mt-4">
                <label for="image">Profile Picture</label>
                <input type="file" id="image" name="image" class="form-control" />
                @error('image')
                    <span class="text-danger fs-6"> {{$message}} </span>
                @enderror
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Bio : </h5>
                <div class="mb-3">
                    <textarea class="form-control" name="bio" id="bio" rows="3">{{$user->bio}}</textarea>
                    @error('bio')
                        <span class="d-block fs-6 text-danger mt-2">{{$message}}</span>
                    @enderror
                </div>
                <button class="btn btn-dark btn-sm mb-3">Save</button>
                @include('users.shared.user-state')
            </div>
        </form>
    </div>
</div>
