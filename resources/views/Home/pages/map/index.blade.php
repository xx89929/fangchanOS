@extends('Home.layout.base')
@section('content')
@include('Home.pages.map.partials.head')
<div class="map-warp">
    @include('Home.pages.map.partials.nav')
    <div class="map-body-box clearfix">
        <div id="qz-map"></div>
        @include('Home.pages.map.partials.house-list')
    </div>

</div>


<script>
    var EXAMPLE_URL = "http://api.map.baidu.com/library/MarkerClusterer/1.2/examples/";
    var deaultMapZoom = 9;
    var map = new BMap.Map("qz-map",{minZoom:9});
    map.enableScrollWheelZoom();
    var point = new BMap.Point(109.733755, 19.180501);
    map.centerAndZoom(point, deaultMapZoom);
    Ajaxurl = $('#getHouseListUrl').attr('url');
    zb_alt = [];
    markerClusterer = null;
    MapZoom = deaultMapZoom;
    sendAjax(Ajaxurl,getViewRange());


    map.addEventListener("zoomend", function () {
        markerClusterer.clearMarkers();
        sendAjax(Ajaxurl,getViewRange());
    });

    map.addEventListener("moveend", function () {
        markerClusterer.clearMarkers();
        sendAjax(Ajaxurl,getViewRange());
    });


    /**
     * 发送Ajax
     */
    function sendAjax(url,data_param) {
        $.ajax({
            url: url,
            type:'post',
            data: {"viewrange" :data_param},
            dataType: 'json',
            success:function (data) {
                var house_list = eval(data);
                var point_zb = [];
                MapZoom = map.getZoom();
                console.log('house',house_list);
                if(house_list instanceof Array){
                    var i = 0;
                    var Dom = $('.house-list-con > ul ');
                    Dom.empty();
                    for (; i < house_list.length ; i++){
                        appendDom(Dom,house_list[i]);
                        setZbArray(point_zb,house_list[i]['lng'],house_list[i]['lat']);
                    }
                }
                console.log('mapzoom',MapZoom);
                if(MapZoom < 17){
                    map.clearOverlays();
                    my_markers(point_zb);
                }else{
                    map_style(house_list);
                }

            },
            error:function (data) {
                console.log('error',data);
            }

        })
    }

/**
 * 设置坐标数组
 */
    function setZbArray(zb,lng,lat) {
        zb.push([lng,lat]);
    }


    /***
     * 追加Dom列表
     */
    function appendDom(Dom,hI) {
        Dom.append(
            "<li>" +
            "<a href='#' class='clearfix'>"+
                "<img class='pull-left' src='"+hI['default_pic']+"'>"+
                "<div class='house-list-con-cr pull-left'>"+
                    "<div class='house-list-con-row clearfix'>"+
                        "<p class='house-name pull-left'>"+hI['name']+"</p>"+
                        "<span class='pull-right' style='background-color:"+hI['color']+"'>"+hI['sell_stype_name']+"</span>"+
                    "</div>"+
                    "<div class='house-list-con-row'>"+
                        "<i class='price'><label>"+hI['average_money']+"</label>元/㎡</i>"+
                    "</div>"+
                    "<div class='house-list-con-row'>"+
                        "<em>"+hI['address']+"</em>"+
                    "</div>"+
                    "<p id='zb' style='display: none'>"+hI['lng']+","+hI['lat']+"</p>"+
                "</div>"+
            "</a>"+
            "</li>"
        )
    }


    /**
     * 获取地图显示范围
     */
    function getViewRange() {
        var ViewRange = new Array();
        var bs = map.getBounds();   //获取可视区域
        var bssw = bs.getSouthWest();   //可视区域左下角
        var bsne = bs.getNorthEast();   //可视区域右上角
        ViewRange= [
            [bssw.lng,bssw.lat],
            [bsne.lng,bsne.lat],
            ];
        return ViewRange;
    }



    /**
     * 聚合参数
     * @type {Array}
     */
    function my_markers(markerArray){
        var markers = [];
        console.log('markers',markerArray);
        for (var i = 0; i < markerArray.length;i++){
            pt = new BMap.Point(markerArray[i][0],markerArray[i][1]);
            markers.push(new BMap.Marker(pt));
        }
        //最简单的用法，生成一个marker数组，然后调用markerClusterer类即可。
        return markerClusterer = new BMapLib.MarkerClusterer(map, {
            markers:markers,
            minClusterSize:1,
            maxZoom:17,
        });
    }
</script>

@endsection