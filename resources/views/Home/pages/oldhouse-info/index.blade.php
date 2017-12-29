@extends('Home.layout.base')
@section('content')
    @include('Home.pages.oldhouse-info.partials.oldhouse-info-head')
    <div class="container">
        @include('Home.pages.oldhouse-info.partials.fudong-house-head')

        @include('Home.pages.oldhouse-info.partials.crumbs-nav')

        @include('Home.pages.oldhouse-info.partials.oldhouse-info-box')

        <div class="scroll_box"  data-spy="scroll" data-target="#oldhouse" data-offset="50">

            @include('Home.pages.oldhouse-info.partials.oldhouse-info-par-box')

            @include('Home.pages.oldhouse-info.partials.circum')
        </div>
    </div>
@endsection