@extends('Home.layout.base')
@section('content')
    <div class="container">
        @include('Home.pages.house-advisory.partials.house-adv-nav')
        @include('Home.pages.house-advisory.partials.house-adv-list')
        @include('Home.pages.newhouse.partials.new-house-list-right')
        @include('Home.pages.index.partials.news-messages-ranking')
    </div>
@endsection