@extends('Home.layout.base')
@section('content')
    <div class="container">
        @include('Home.pages.groupbuy.partials.crumbs-nav')
        @include('Home.pages.groupbuy.partials.group-buy-list-left')
        @include('Home.pages.see-house-group.partials.seehouse-list-right')
    </div>
@endsection