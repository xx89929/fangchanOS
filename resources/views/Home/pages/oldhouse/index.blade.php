@extends('Home.layout.base')
@section('content')
    <div class="container" >
        @include('Home.pages.newhouse.partials.crumbs-nav')
        @include('Home.pages.oldhouse.partials.banner-1')
        @include('Home.pages.oldhouse.partials.filtrate-nav')
        @include('Home.pages.oldhouse.partials.old-house-list')
        @include('Home.pages.newhouse.partials.house-page-ranking')
    </div>
    @include('Home.layout.partials.pop-1')
@endsection