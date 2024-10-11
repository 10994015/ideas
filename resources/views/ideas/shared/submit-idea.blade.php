@auth
@persist('submit-idea')
<h4> {{__('idea.share_yours_ideas')}} </h4>
<div class="row">
    <form action="{{route('ideas.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
            @error('content')
                <span class="d-block fs-6 text-danger mt-2">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> {{__('idea.shared')}} </button>
        </div>
    </form>
</div>
@endpersist
@endauth
@guest
    <h4><a href="{{route('login')}}">{{__('idea.login_to_shared')}}</a></h4>
@endguest
