@include('Home.pages.newhouse-info.partials.newhouse-info-head')

<div class="container" style="position: relative;">

    @include('Home.pages.newhouse-info.partials.fudong-house-head')

    @include('Home.pages.newhouse-info.partials.crumbs-nav')

    @include('Home.pages.newhouse-info.partials.newhouse-info-box')

    <div class="scroll_box"  data-spy="scroll" data-target="#selector" data-offset="50">

        @include('Home.pages.newhouse-info.partials.newhouse-info-par-box')

        @include('Home.pages.newhouse-info.partials.newhouse-info-pics')

        @include('Home.pages.newhouse-info.partials.circum')
    </div>
</div>