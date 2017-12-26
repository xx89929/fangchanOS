@extends('Home.layout.base')
@section('content')
    <div class="container">
        @include('Home.pages.see-house-group.partials.crumbs-nav')
        <div class="seehouse-list-box">
            @include('Home.pages.see-house-group.partials.seehouse-list-left')
            @include('Home.pages.see-house-group.partials.seehouse-list-right')
        </div>
    </div>
@endsection