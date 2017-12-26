<html>
<head lang="zh-CN">
@include('Home.layout.partials.head')
</head>
<body>
<div class="container-fluid">
    @include('Home.layout.partials.nav')
    @yield('content')
    @include('Home.layout.partials.foot')
</div>

</body>
</html>


