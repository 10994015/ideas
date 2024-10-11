<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a wire:navigate.hover class="{{ (Route::is('dashboard')) ? 'text-white bg-primary rounded' : '' }}  nav-link" href="{{route('dashboard')}}">
                    <span>{{__('idea.home')}}</span></a>
            </li>
            <li class="nav-item">
                <a wire:navigate.hover class="{{ (Route::is('feed')) ? 'text-white bg-primary rounded' : '' }}  nav-link" href="{{route('feed')}}">
                    <span>{{__('idea.feed')}}</span></a>
            </li>
            <li class="nav-item">
                <a wire:navigate.hover class="{{ (Route::is('terms')) ? 'text-white bg-primary rounded' : '' }}  nav-link" href="{{route('terms')}}">
                    <span>{{__('idea.terms')}}</span></a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2 d-flex justify-content-center">
        <a class="nav-link mx-2" aria-current="page" href="{{route('lang', 'en')}}">En</a>
        <a class="nav-link mx-2" aria-current="page" href="{{route('lang', 'zh')}}">Zh</a>
    </div>
</div>
