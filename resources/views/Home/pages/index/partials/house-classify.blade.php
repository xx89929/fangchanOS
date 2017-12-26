<section>
    <div class="container">
        <div class="section-box">
            <div class="section-title text-center">
                <h1>适合你的就在这里</h1>
                <h4>选择自己喜欢的楼盘类型</h4>
            </div>
            <div class="house-classify-choose ">
                <div class="house-classify-ul text-center">
                    <h3>综合分类</h3>
                    <ul class="list-unstyled">
                        <li class="is_active"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;热门刚需</li>
                        <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;升值潜力</li>
                        <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;生态宜居</li>
                    </ul>
                </div>
                <div class="house-classify-content">
                    <div class="house-classify-content-item text-center" style="display: block;">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/01.jpg')}}"><h3>小户型</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/02.jpg')}}"><h3>现房</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/03.jpg')}}"><h3>综合体</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/04.jpg')}}"><h3>低价</h3></a>
                            </li>
                        </ul>
                    </div>

                    <div class="house-classify-content-item text-center">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/05.jpg')}}"><h3>地铁沿线</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/06.jpg')}}"><h3>品牌地产</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/07.jpg')}}"><h3>旅游胜地</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/08.jpg')}}"><h3>教育地产</h3></a>
                            </li>
                        </ul>
                    </div>

                    <div class="house-classify-content-item text-center">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/09.jpg')}}"><h3>海景房</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/10.jpg')}}"><h3>江景房</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/11.jpg')}}"><h3>山景房</h3></a>
                            </li>
                            <li>
                                <a href="#"><img class="img-responsive" src="{{url('home/images/12.jpg')}}"><h3>公园地产</h3></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.house-classify-ul > ul > li').hover(function () {
            var that = $(this),
                index = that.index();
            that.addClass('is_active').siblings().removeClass('is_active');
            $('.house-classify-content').find('div.house-classify-content-item').eq(index).show().siblings().hide();
        })
    </script>
</section>