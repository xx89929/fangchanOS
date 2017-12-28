<div class="fudong-house-head">
    <div class="container fudong-house-head-box">
        <ul class="nav list-inline">
            <li class="pull-left active"><a href="#huxing">户型图</a></li>
            <li class="pull-left"><a href="#jianjie">楼盘简介</a></li>
            <li class="pull-left"><a href="#xiangce">楼盘相册</a></li>
            <li class="pull-left"><a href="#peitao">周边配套</a></li>
        </ul>
    </div>
</div>

<div class="fudong-house-right-fix">
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
                <h4>销售人员：李XXXX</h4>
                <p>XX房产 销售经理</p>
            </div>

        </div>
    </div>
</div>

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
            if(getCurrentHight > 820 && getCurrentHight < 1700){
                $('.fudong-house-right-fix').show();
            }else{
                $('.fudong-house-right-fix').hide();
            }
        })

        $('div.fudong-house-head ul > li').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        })
    })
</script>