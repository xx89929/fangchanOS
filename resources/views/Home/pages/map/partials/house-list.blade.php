<div class="house-list pull-left">
    <div class="house-list-tag">
        <ul class="list-inline clearfix">
            <li class="active pull-left"><div class="map-tags-f1"><a>默认</a></div></li>
            <li class="pull-left"><div class="map-tags-f1"><a>售价 <span class="caret"></span></a></div></li>
            <li class="pull-left"><div class="map-tags-f1"><a>开盘时间 <span class="caret"></span></a></div></li>
        </ul>
    </div>
    <div class="house-list-con">
        <ul class="list-unstyled">
            {{--@foreach($house_list as $hl)--}}
            {{--<li>--}}
                {{--<a href="#" class="clearfix">--}}
                    {{--<img class="pull-left" src="{{config('filesystems.disks.uploads.url').'/'.$hl->default_pic}}">--}}
                    {{--<div class="house-list-con-cr pull-left">--}}
                        {{--<div class="house-list-con-row clearfix">--}}
                            {{--<p class="house-name pull-left">{{$hl->name}}</p>--}}
                            {{--<span class="pull-right" style="background-color:{{$hl->getSellStatus->color}}">{{$hl->getSellStatus->name}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="house-list-con-row">--}}
                            {{--<i class="price"><label>{{$hl->average_money}}</label>元/㎡</i>--}}
                        {{--</div>--}}
                        {{--<div class="house-list-con-row">--}}
                            {{--<em>{{$hl->address}}</em>--}}
                        {{--</div>--}}
                        {{--<p id="zb" style="display: none">{{$hl->lng}},{{$hl->lat}}</p>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endforeach--}}
        </ul>
    </div>
</div>