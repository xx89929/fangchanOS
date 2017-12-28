@extends('Home.layout.base')
@section('content')
    @include('Home.pages.index.partials.top-banner')

    {{--@include('home.pages.index.partials.banner-2')--}}
    @include('Home.pages.index.partials.house-classify')
    @include('Home.pages.index.partials.group-buy')
    @include('Home.pages.index.partials.hot-house')
    @include('Home.pages.index.partials.new-house')
    @include('Home.pages.index.partials.news-messages')
    @include('Home.pages.index.partials.banner-3')
    @include('Home.pages.index.partials.new-house-ranking')
    @include('Home.pages.index.partials.old-house-ranking')
    @include('Home.pages.index.partials.news-messages-ranking')
    @include('Home.pages.index.partials.banner-1')
@endsection