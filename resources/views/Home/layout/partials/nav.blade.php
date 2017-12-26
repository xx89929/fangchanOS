<section class="nav-warp">
    <div class="container">
        <div class="nav-box clearfix">
            <div class="logo pull-left">
                <a href="#">
                    <img class="img-responsive" src="{{url('home/images/icon/web_logo_fuild.png')}}">
                </a>
            </div>
            <div class="nav-list-box pull-left text-center">
                <ul class="list-inline">
                    <li class="col-xs-2"><a href="{{route('/').'/'}}">首页</a></li>
                    <li class="col-xs-2" id="nav_new-houses">
                        <a href="{{route('newhouse')}}">新房楼盘<span class="triangle-down"></span></a>
                        <div class="house-filtrate">
                            <div class="container">
                                <div class="house-filtrate-box clearfix">
                                    <div class="house-filtrate-box-item col-xs-3 pull-left">
                                        <div class="house-filtrate-tit text-left">
                                            <a href="#">按地区</a>
                                            <i class="triangle-facing-right"></i>
                                        </div>
                                        <div class="house-filtrate-des">
                                            <ul class="list-inline text-left">
                                                <li><a href="#">海口</a></li>
                                                <li><a href="#">三亚</a></li>
                                                <li><a href="#">儋州</a></li>
                                                <li><a href="#">三沙</a></li>
                                                <li><a href="#">琼海</a></li>
                                                <li><a href="#">万宁</a></li>
                                                <li><a href="#">文昌</a></li>
                                                <li><a href="#">东方</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="house-filtrate-box-item col-xs-3 pull-left">
                                        <div class="house-filtrate-tit text-left">
                                            <a href="#">按均价（元/平米）</a>
                                            <i class="triangle-facing-right"></i>
                                        </div>
                                        <div class="house-filtrate-des">
                                            <ul class="list-inline text-left">
                                                <li><a href="#">4000以下</a></li>
                                                <li><a href="#">4000-8000</a></li>
                                                <li><a href="#">8000-20000</a></li>
                                                <li><a href="#">20000-30000</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="house-filtrate-box-item col-xs-3 pull-left">
                                        <div class="house-filtrate-tit text-left">
                                            <a href="#">按户型</a>
                                            <i class="triangle-facing-right"></i>
                                        </div>
                                        <div class="house-filtrate-des">
                                            <ul class="list-inline text-left">
                                                <li><a href="#">一室</a></li>
                                                <li><a href="#">二室</a></li>
                                                <li><a href="#">三室</a></li>
                                                <li><a href="#">四室</a></li>
                                                <li><a href="#">五室</a></li>
                                                <li><a href="#">别墅</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="house-filtrate-box-item col-xs-3 pull-left">
                                        <div class="house-filtrate-tit text-left">
                                            <a href="#">按销售状态</a>
                                            <i class="triangle-facing-right"></i>
                                        </div>
                                        <div class="house-filtrate-des">
                                            <ul class="list-inline text-left">
                                                <li><a href="#">在售</a></li>
                                                <li><a href="#">代售</a></li>
                                                <li><a href="#">售馨</a></li>
                                                <li><a href="#">认筹</a></li>
                                                <li><a href="#">存量房</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="col-xs-2"><a href="{{route('oldhouse')}}">二手房</a></li>
                    <li class="col-xs-2"><a href="{{route('groupbuy')}}">优惠团购</a></li>
                    <li class="col-xs-2"><a href="{{route('seehousegroup')}}">看房团</a></li>
                    <li class="col-xs-2"><a href="{{route('houseadv')}}">房产资讯</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    $(function () {
        var li = $('.nav-list-box > ul').find('> li');
        var url = window.location.href
        for(var i = 0 ; i < li.length; i++){
            var url_active = li.eq(i).find('a').attr('href');

            if (url == url_active) {
                li.eq(i).addClass('active').siblings().removeClass('active');
                return false;
            }
        }
    })

    $('#nav_new-houses').hover(function () {
        $(this).find('span').removeClass('triangle-down').addClass('triangle-up');
        $('.house-filtrate').show();
    },function () {
        $(this).find('span').removeClass('triangle-up').addClass('triangle-down');
        $('.house-filtrate').hide();
    })
</script>
