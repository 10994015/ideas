@extends('layouts.app')
@section('title', "Dashboard")
@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        @include('shared.success-message')
        @include('shared.error-message')
        @include('ideas.shared.submit-idea')
        <hr>
        @forelse($ideas as $idea)
        <div class="mt-3">
            @include('ideas.shared.idea-card')
        </div>
        @empty
            <p class="text-center mt-4">{{__('idea.no_results_found')}}.</p>
        @endforelse
        <div class="mt-3">
            {{ $ideas->withQueryString()->links() }}
        </div>
    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
</div>
@endsection
