@extends('Home.layout.base')
@section('content')
    @include('home.pages.index.partials.top-banner')

    {{--@include('home.pages.index.partials.banner-2')--}}
    @include('home.pages.index.partials.house-classify')
    @include('home.pages.index.partials.group-buy')
    @include('home.pages.index.partials.hot-house')
    @include('home.pages.index.partials.new-house')
    @include('home.pages.index.partials.news-messages')
    @include('home.pages.index.partials.banner-3')
    @include('home.pages.index.partials.new-house-ranking')
    @include('home.pages.index.partials.old-house-ranking')
    @include('home.pages.index.partials.news-messages-ranking')
    @include('home.pages.index.partials.banner-1')
@endsection