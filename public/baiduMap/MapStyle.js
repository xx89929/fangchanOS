/**
 * 地图样式
 * @param point
 * @param text
 * @param mouseoverText
 * @constructor
 */

function map_style(info) {
    function ComplexCustomOverlay(point, house_name,house_price, mouseoverText){
        this._point = point;
        this._house_name = house_name;
        this._house_price = house_price;
        this._overText = mouseoverText;
    }
    ComplexCustomOverlay.prototype = new BMap.Overlay();
    ComplexCustomOverlay.prototype.initialize = function(map){
        this._map = map;
        var div = this._div = document.createElement("div");
        div.style.position = "absolute";
        div.style.zIndex = BMap.Overlay.getZIndex(this._point.lat);
        div.style.boxShadow = '0 0 3px #ddd';
        div.style.width = '200px';
        div.style.lineHeight = "23px";
        div.style.whiteSpace = "nowrap";
        div.style.MozUserSelect = "none";
        div.style.clear = "both";
        div.style.textAlign = "center";
        var span1 = this._span = document.createElement("span");
        div.appendChild(span1);
        span1.appendChild(document.createTextNode(this._house_name));
        span1.style.color = 'white';
        span1.style.width = '50%';
        span1.style.float = 'left';
        span1.style.backgroundColor = '#FFA200';
        span1.style.padding = '2px 10px';
        span1.style.fontSize = "14px";
        var span2 = this._span = document.createElement("span");
        div.appendChild(span2);
        span2.appendChild(document.createTextNode(this._house_price));
        span2.style.color = '#333';
        span2.style.width = '50%';
        span2.style.float = 'left';
        span2.style.backgroundColor = 'white';
        span2.style.padding = '2px 10px';
        span2.style.fontSize = "14px";
        var that = this;

        var arrow = this._arrow = document.createElement("div");
//            arrow.style.background = "url(http://map.baidu.com/fwmap/upload/r/map/fwmap/static/house/images/label.png) no-repeat";
        arrow.style.position = "absolute";
        arrow.style.width = "11px";
        arrow.style.height = "10px";
        arrow.style.top = "22px";
        arrow.style.left = "10px";
        arrow.style.overflow = "hidden";
        div.appendChild(arrow);

        div.onmouseover = function(){
            this.style.zIndex = "999999";
            span1.style.backgroundColor = "#FFC109";
            span2.style.color = '#FFC109';
//                arrow.style.backgroundPosition = "0px -20px";
        }

        div.onmouseout = function(){
            this.style.zIndex = BMap.Overlay.getZIndex(that._point.lat);
            span1.style.backgroundColor = "#FFA200";
            span2.style.color = '#333';
//                arrow.style.backgroundPosition = "0px 0px";
        }

        map.getPanes().labelPane.appendChild(div);

        return div;
    }
    ComplexCustomOverlay.prototype.draw = function(){
        var map = this._map;
        var pixel = map.pointToOverlayPixel(this._point);
        this._div.style.left = pixel.x - parseInt(this._arrow.style.left) + "px";
        this._div.style.top  = pixel.y - 30 + "px";
    }

    var i = 0;

    var pt = null;
    console.log('my_style',info);
    for (;i < info.length; i++ ){
        pt = new BMap.Point(info[i]['lng'],info[i]['lat']);
        var myCompOverlay = new ComplexCustomOverlay(pt, info[i]['name'],info[i]['average_money']+'元/㎡');
        map.addOverlay(myCompOverlay);
    }


}
