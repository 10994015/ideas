@extends('layouts.app')
@section('title', "Terms")
@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <h1>{{__('idea.terms')}}</h1>
        <p>
            {{__('idea.terms_content')}}
        </p>
    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
</div>
@endsection
