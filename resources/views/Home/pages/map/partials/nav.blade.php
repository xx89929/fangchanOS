<div class="house-map-nav-box">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新房<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">二手房</a></li>
                            <li><a href="#">新房</a></li>
                        </ul>
                    </li>
                    <form class="navbar-form navbar-left clearfix">
                        <div class="form-group pull-left">
                            <input type="text" class="form-control" placeholder="请输入楼盘名称或地址">
                        </div>
                        <button type="submit" class="btn btn-default pull-left">搜索</button>
                    </form>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">区域<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($city as $city)
                            <li><a value="{{$city->id}}">{{$city->area_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">均价<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">1万以下</a></li>
                            <li><a href="#">10000-20000</a></li>
                            <li><a href="#">20000-30000</a></li>
                            <li><a href="#">30000-40000</a></li>
                            <li><a href="#">40000-50000</a></li>
                            <li><a href="#">5万以上</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">物业类型<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($wuye as $wuye)
                            <li><a value="{{$wuye->id}}">{{$wuye->name}}</a></li>
                            @endforeach()
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">销售类型<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($sell_type as $st)
                            <li><a value="{{$st->id}}">{{$st->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Action</a></li>--}}
                {{--<li><a href="#">Another action</a></li>--}}
                {{--<li><a href="#">Something else here</a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li><a href="#">Separated link</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
