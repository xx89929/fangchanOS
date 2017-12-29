<div class="fudong-house-head">
    <div class="container fudong-house-head-box" id="oldhouse">
        <ul class="nav list-inline">
            <li class="pull-left"><a href="#xinxi">房源信息</a></li>
            <li class="pull-left"><a href="#dianping">房源点评</a></li>
            <li class="pull-left"><a href="#tupian">房源图片</a></li>
            <li class="pull-left"><a href="#peitao">周边配套</a></li>
        </ul>
    </div>
</div>

<div class="fudong-house-right-fix">
    <div class="fudong-house-right-fudong">
        <div class="tuijian-sales-box">
            <div class="tuijian-sales-title text-center">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                0898-6676640
            </div>
            <div class="tuijian-sales-cont clearfix">
                <div class="tuijian-sales-img pull-left">
                    <img class="img-circle" src="{{url('home/images/sales_pic/xn3.jpg')}}">
                </div>
                <div class="uijian-sales-des pull-left">
                    <h4>销售顾问：李XXXX</h4>
                    <p>XX房产 销售经理</p>
                </div>
                <div class="house-info-sales-weixin">
                    <img src="{{url('home/images/sales_pic/hyCode.jpg')}}">
                </div>
            </div>
            <div class="tuijian-sales-cont clearfix">
                <div class="tuijian-sales-img pull-left">
                    <img class="img-circle" src="{{url('home/images/sales_pic/xn3.jpg')}}">
                </div>
                <div class="uijian-sales-des pull-left">
                    <h4>信贷顾问：李XXXX</h4>
                    <p>XX房产 销售经理</p>
                </div>
                <div class="house-info-sales-weixin">
                    <img src="{{url('home/images/sales_pic/hyCode.jpg')}}">
                </div>
            </div>
            <div class="tuijian-sales-cont clearfix">
                <div class="tuijian-sales-img pull-left">
                    <img class="img-circle" src="{{url('home/images/sales_pic/xn3.jpg')}}">
                </div>
                <div class="uijian-sales-des pull-left">
                    <h4>装修顾问：李XXXX</h4>
                    <p>XX房产 销售经理</p>
                </div>
                <div class="house-info-sales-weixin">
                    <img src="{{url('home/images/sales_pic/hyCode.jpg')}}">
                </div>
            </div>
            <div class="tuijian-sales-cont clearfix">
                <div class="tuijian-sales-img pull-left">
                    <img class="img-circle" src="{{url('home/images/sales_pic/xn3.jpg')}}">
                </div>
                <div class="uijian-sales-des pull-left">
                    <h4>风水顾问：李XXXX</h4>
                    <p>XX房产 销售经理</p>
                </div>
                <div class="house-info-sales-weixin">
                    <img src="{{url('home/images/sales_pic/hyCode.jpg')}}">
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $('.tuijian-sales-cont').hover(function () {
        $(this).find('div.house-info-sales-weixin').show();
    },function () {
        $(this).find('div.house-info-sales-weixin').hide();
    })
</script>

<script>
    $(function () {
        $(window).scroll(function () {
            var getCurrentHight = $(document).scrollTop();
//            console.log(getCurrentHight);
            if(getCurrentHight > 820 && getCurrentHight < 3000){
                $('.fudong-house-head').show();
            }else {
                $('.fudong-house-head').hide();
            }
            if(getCurrentHight > 820 && getCurrentHight < 2300){
                $('.fudong-house-right-fudong').show();
            }else{
                $('.fudong-house-right-fudong').hide();
            }
        })

        $('div.fudong-house-head-box > ul > li > a').click(function () {
            $(this).parent('li').addClass('active').siblings().removeClass('active');
        })
    })
</script>