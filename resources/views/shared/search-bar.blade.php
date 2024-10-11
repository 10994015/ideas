<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">{{__('idea.search')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="get">
            <input placeholder="..." value="{{request('search', '')}}" class="form-control w-100" type="text"
            id="search" name="search" />
            <button class="btn btn-dark mt-2"> {{__('idea.search')}}</button>
        </form>
    </div>
</div>
