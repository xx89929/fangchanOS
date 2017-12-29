<div class="cirum-box clearfix" id="peitao">
    <div class="newhouse-info-house-type-h">
        <h2>周边配套</h2>
    </div>
    <div class="cirum-map pull-left">
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=XtBZlAmRRP5ATTj0LG95AhU8vDBSNiue"></script>
        <div id="allmap">

        </div>
        <div class="cirum-map-point-p">
            {{--<p>金地名峰</p>--}}
        </div>
    </div>
    <div class="cirum-search pull-left">
        <div class="cirum-search-tag">
            <ul class="list-inline clearfix text-center">
                <li class="col-xs-2 active"><a value="交通设施">交通</a></li>
                <li class="col-xs-2"><a data_poi="学校">学校</a></li>
                <li class="col-xs-2"><a data_poi="医疗">医疗</a></li>
                <li class="col-xs-2"><a data_poi="购物">商超</a></li>
                <li class="col-xs-2"><a data_poi="生活">生活</a></li>
                <li class="col-xs-2"><a data_poi="其他">其他</a></li>
            </ul>
        </div>
        <div class="cirum-search-res" id="cirum-search-list">
        </div>
    </div>
</div>


<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />


<script>
    $(function () {
        $('.cirum-search-tag > ul > li').click(function () {
            var Poi = $(this).find('a').attr('data_poi');
            init(Poi);
            $(this).addClass('active').siblings().removeClass('active');
        })
    })

    //百度地图API功能
    function loadJScript() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://api.map.baidu.com/api?v=2.0&ak=XtBZlAmRRP5ATTj0LG95AhU8vDBSNiue&callback=init";
        document.body.appendChild(script);
    }

    function init(mPoi) {
        var init_Poi = '交通';
        var tg = $('.newhouse-info-tit').find('h2').text();
        var mPoi = mPoi ? mPoi : init_Poi;
        console.log('init_Poi',mPoi);
        console.log('tg',tg);
//
//        var map = new BMap.Map("allmap");            // 创建Map实例
//        var point = new BMap.Point(tg); // 创建点坐标
//        map.centerAndZoom(tg,15);
//        map.enableScrollWheelZoom(true);                 //启用滚轮放大缩小

        var map = new BMap.Map("allmap");
        var point = new BMap.Point(116.404, 39.915);
        map.centerAndZoom(point, 15);
        map.enableScrollWheelZoom(true);

        var myGeo = new BMap.Geocoder();
        myGeo.getPoint(tg, function(point){
            if (point) {
                map.centerAndZoom(point, 15);
                var marker = new BMap.Marker(point);  // 创建标注
                map.addOverlay(marker);               // 将标注添加到地图中
                marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

                var opts = {
                    position : point,    // 指定文本标注所在的地理位置
                    offset   : new BMap.Size(-30, 0)    //设置文本偏移量
                }
                var label = new BMap.Label(tg, opts);  // 创建文本标注对象
                label.setStyle({
                    color : "white",
                    fontSize : "20px",
                    height : "30px",
                    lineHeight : "18px",
                    fontFamily:"微软雅黑",
                    "background-color": "rgba(0, 0, 0, 0.7)",
                    "z-index":"-2",
                    "padding" : "5px 10px",
                    "border" : "0px",
                });
                map.addOverlay(label);


                var circle = new BMap.Circle(point,1000,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3});
                map.addOverlay(circle);
                var local =  new BMap.LocalSearch(map, {renderOptions: {map: map,panel: "cirum-search-list", autoViewport: false}});
//                local.search(mPoi);
                local.searchNearby(mPoi,point,1000);
//                var local = new BMap.LocalSearch(map, {
//                    renderOptions: {map: map, panel: "search_baidumap_btn"}
//                });
//                local.search(mPoi);
            }else{
                alert("您选择地址没有解析到结果!请联系海南企众技术支持：13337550507");
            }
        }, "全国");



    }

    window.onload = loadJScript;  //异步加载地图
</script>