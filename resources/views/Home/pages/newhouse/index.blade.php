@extends('Home.layout.base')
@section('content')
    <div class="container">
    @include('Home.pages.newhouse.partials.crumbs-nav')
    @include('Home.pages.newhouse.partials.banner-1')
    @include('Home.pages.newhouse.partials.filtrate-nav')
    </div>
    @include('Home.pages.newhouse.partials.nav-house-search')
    <div class="container">
        @include('Home.pages.newhouse.partials.new-house-list-left')
        @include('Home.pages.newhouse.partials.new-house-list-right')
    </div>
    <div class="container">
        @include('Home.pages.newhouse.partials.house-page-ranking')
    </div>
    @include('Home.layout.partials.pop-1')
@endsection