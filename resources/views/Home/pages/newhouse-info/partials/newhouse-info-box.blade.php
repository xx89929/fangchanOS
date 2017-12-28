<div class="newhouse-info-box clearfix">
    <div class="newhouse-info-img-left pull-left">


        {{--轮播--}}
            <div class="slider-container">
                <div class="slider-hidden">
                    <div class="slider has-touch clearfix">
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-hosue-1.jpg')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-house-2.png')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-house-3.png')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-hosue-4.jpg')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-hosue-4.jpg')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-house-5.png')}}" alt="">
                        </div>
                        <div class="slider__item">
                            <img src="{{url('home/images/hot-house-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
                    <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
                </div>
                <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
                    <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
                </div>
                <div data-ikslider-dir="prev" style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -90px -331px;" class="ul-house-btn-prev ul-house-btn slider__switch"></div>
                <div data-ikslider-dir="next" style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -130px -331px;" class="ul-house-btn-next ul-house-btn slider__switch"></div>

            </div>
            <div class="preview house-f2-btn-g clearfix">
                <div class="preview-ul">
                    <a><img src="{{url('home/images/hot-hosue-1.jpg')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-house-2.png')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-house-3.png')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-hosue-4.jpg')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-hosue-4.jpg')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-house-5.png')}}" alt="" /></a>
                    <a><img src="{{url('home/images/hot-house-2.png')}}" alt="" /></a>
                </div>
            </div>


        <script src="{{url('js/slider.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(".slider-container").ikSlider({
                speed : 500,
            });
            $(".slider-container").on('changeSlide.ikSlider', function (evt) {
                var SlideConut = evt.delegateTarget.lastElementChild.childElementCount;
                var IndexSlide = evt.currentSlide;
//                console.log(evt.currentSlide);
//                var jl = 170;
//                if( IndexSlide > 3 && IndexSlide != SlideConut){
//                    $('.preview-ul').animate({left:-jl});
//                    jl++;
//                }
            });
        </script>
        <script type="text/javascript">
            $('.slider-container').hover(function () {
                $(this).find('div.slider__switch--prev').show();
                $(this).find('div.slider__switch--next').show();
            },function () {
                $(this).find('div.slider__switch--prev').hide();
                $(this).find('div.slider__switch--next').hide();
            })

            var $preview = $('.preview a');

            function changeActivePreview(i) {
                $('.active').removeClass('active');
                $preview.eq(i).addClass('active');
            }

            $preview.on('click', function(e) {
                e.preventDefault();
                var index = $(this).index();
                $('.slider-container').ikSlider(index);
            });

            $('.slider-container').on('changeSlide.ikSlider', function(e) {
                changeActivePreview(e.currentSlide);
            });

            changeActivePreview(0)
        </script>
        {{--结束轮播--}}

        {{--保存--}}

        {{--<div data-ikslider-dir="prev" style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -90px -331px;" class="ul-house-btn-prev ul-house-btn slider__switch"></div>--}}
        {{--<div data-ikslider-dir="next" style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -130px -331px;" class="ul-house-btn-next ul-house-btn slider__switch"></div>--}}
        {{----}}
        {{--<div class="newhouse-info-img-f1">--}}
            {{--<img src="{{url('home/images/newhouse-info-img-1.jpg')}}">--}}
        {{--</div>--}}
        {{--<div class="newhouse-info-img-f2">--}}
            {{--<ul class="list-inline">--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-1.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-2.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-1.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-2.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-2.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-2.jpg')}}"></li>--}}
                {{--<li><img src="{{url('home/images/newhouse-info-img-2.jpg')}}"></li>--}}
            {{--</ul>--}}
            {{--<div class="house-f2-btn-g">--}}
                {{--<p style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -90px -331px;" class="ul-house-btn-prev"></p>--}}
                {{--<p style="background: url('{{url("home/images/icon/btns_photoalbum.gif")}}') no-repeat  -130px -331px;" class="ul-house-btn-next"></p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--end 保存--}}
    </div>

    <div class="newhouse-info-des-right pull-left">
        <div class="newhouse-info-des-t">
            <p>均价<i>58000</i><em>元/平米</em></p>
        </div>
        <div class="newhouse-info-des-info">
            <ul class="list-unstyled">
                <li><span>楼盘别名</span><p>凯旋天玺名庭</p></li>
                <li><span>物业用途</span><p>商铺 , 住宅</p></li>
                <li><span>开盘时间</span><p>暂无数据</p></li>
                <li><span>交房时间</span><p>2020年04月</p></li>
                <li><span>预售证号</span><p>深房许字（2017）龙岗019号</p></li>
                <li><span>项目地址</span><p>[ 龙岗 布吉 ] 布吉长龙地铁站C2出口金鹏大酒店对面</p></li>
            </ul>
            <div class="apply-newhouse-info-btn ">
                <button class="text-left"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0898-6676640</button>
            </div>
            <div class="newhouse-info-sales clearfix">
                <div class="newhouse-info-sales-img pull-left">
                    <img class="img-circle" src="{{url('home/images/sales_pic/xn3.jpg')}}">
                </div>
                <div class="newhouse-info-sales-des pull-left">
                    <h4>销售人员：李XXXX</h4>
                    <em>XX房产 销售经理</em>
                    <button>预约看房</button>
                    <button>电话咨询</button>
                </div>
            </div>
        </div>
    </div>
</div>