<div class="newhouse-info-box clearfix">
    <div class="newhouse-info-img-left pull-left">
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
    </div>


    <div class="newhouse-info-des-right pull-left">
        <div class="oldhouse-info-des-t oldhouse-info-des-row">
            <span><i>660</i><dd>万</dd></span>
            <em>55318元/平米</em>
        </div>
        <div class="oldhouse-info-des-param-a1 oldhouse-info-des-row">
            <ul class="list-unstyled">
                <li class="clearfix"><div class="oldhouse-info-param-span"><span>小区名称</span></div><em>嘉宾花园</em></li>
                <li class="clearfix"><div class="oldhouse-info-param-span"><span>看房时间</span></div><em>随时可预约</em><a href="#">预约看房</a> </li>
                <li class="clearfix"><div class="oldhouse-info-param-span"><span>对口学校</span></div><em>深圳市滨河小学</em></li>
                <li class="clearfix"><div class="oldhouse-info-param-span"><span>所在区域</span></div><em>深圳市滨河小学</em></li>
                <li class="clearfix"><div class="oldhouse-info-param-span"><span>对口学校</span></div><em>[罗湖人民南]近1号线(罗宝线)大剧院站</em></li>
            </ul>
        </div>
        <div class="oldhouse-info-des-param-a2 oldhouse-info-des-row clearfix">
            <span class="pull-left col-xs-4 text-center">
                <h4>3室2厅</h4>
                <p>低层/28层</p>
            </span>
            <span class="pull-left col-xs-4 text-center">
                <h4>119.31平米</h4>
                <p>精装修</p>
            </span>
            <span class="pull-left col-xs-4 text-center">
                <h4>东北</h4>
                <p>1992年建</p>
            </span>
        </div>
        <div class="oldhouse-info-des-param-a3 oldhouse-info-des-row clearfix">
            <div class="oldhouse-info-des-param-a3-sales-img pull-left">
                <img class="img-circle" src="{{url('home/images/sales_pic/hy.jpg')}}">
            </div>
            <div class="oldhouse-info-des-param-a3-sales-info pull-left">
                <h3>姓名XX<button>在线联系</button></h3>
                <p>我及时更新房源信息，保证信息真实</p>
                <em>133 3755 0507</em>
            </div>
        </div>
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