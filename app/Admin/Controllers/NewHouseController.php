<?php

namespace App\Admin\Controllers;

use App\Models\Account;
use App\Models\Area;
use App\Models\HouseSellStatus;
use App\Models\HouseTraitTag;
use App\Models\NewHouse;

use App\Models\WuYeType;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use GuzzleHttp\Client;
use function PHPSTORM_META\type;

class NewHouseController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('新房楼盘');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('新房楼盘');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('新房楼盘');
            $content->description('录入');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(NewHouse::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();
            $grid->default_pic('展示相册')->image();
//            $grid->column('house_tag','标签')->label();
            $grid->column('get_account_info.head_pic','归属经纪人')->image();
            $grid->name('楼盘名称');
            $grid->as_name('楼盘别名');
            $grid->column('getSellStatus.name','售卖状态')->display(function ($name){
                $color = HouseSellStatus::where('name',$name)->first();
                return "<span class='label' style='background-color: $color->color'>$name</span>";
            });


            $grid->sell_price('楼盘价格(万元)')->sortable();

            $is_display = [
                'on' => ['value' => 1,'text' => '显示','color' => 'primary'],
                'off' => ['value' => 0,'text' => '不显示','color' => 'danger'],
            ];
            $grid->is_display('是否显示')->switch($is_display);

            $grid->sell_begin_time('开盘时间')->sortable();
            $grid->house_use_time('交房时间')->sortable();
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');

            $grid->filter(function (Grid\Filter $filter){
               $filter->like('name','楼盘名称');
                $filter->between('sell_begin_time', '开盘时间')->datetime();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(NewHouse::class, function (Form $form) {
            $form->tab('基本信息',function (Form $form){
                $form->display('id', 'ID');
                $form->image('default_pic', '展示图片')->move('house_pics/')->uniqueName()->resize(712,425);

                $form->select('broker','经纪人')->options(function(){
                    return Account::getBroker()->with('get_account_info')->get()->pluck('get_account_info.nick_name','id');
                });
                $form->text('name','楼盘名称');
                $form->text('as_name','楼盘别名');
                $form->currency('sell_price','楼盘价格(万元)')->symbol('￥');
                $form->currency('average_money','平均价(元/平方米)')->symbol('￥');

                $form->select('province','省')->options(
                    Area::where('area_type',1)->pluck('area_name','id')
                )->load('city','/admin/api/area/parent');

                $form->select('city','市')->options(function($id){
                    return Area::options($id);
                })->load('district','/admin/api/area/parent');

                $form->select('district','区')->options(function($id){
                    return Area::options($id);
                });

                $form->text('address','楼盘地址');

                $form->display('lat','纬度')->help('纬度，将在提交后自动生成，不需要填写');
                $form->display('lng','经度')->help('经度，将在提交后自动生成，不需要填写');

                $form->select('wuye_type','物业类型')->options(function (){
                    return WuYeType::all()->pluck('name','id');
                });
                $form->text('house_number','预售字号');
                $form->text('sell_tel','售后电话');
                $form->checkbox('house_tag','楼盘标签')->options(
                    HouseTraitTag::pluck('name','id')->all()
                )->help('最多6个标签');

                $form->select('sell_status','售卖状态')->options(function (){
                    return HouseSellStatus::all()->pluck('name','id');
                });

                $form->date('sell_begin_time','开盘时间');
                $form->date('house_use_time','交房时间');
                $is_display = [
                    'on' => ['value' => 1,'text' => '显示','color' => 'primary'],
                    'off' => ['value' => 0,'text' => '不显示','color' => 'danger'],
                ];
                $form->switch('is_display','是否显示')->states($is_display)->help('页面上是否会加载');
                $form->divide();
                $form->slider('plot_ratio','容积率')->options(['max' => 100, 'min' => 1, 'step' => 5, 'postfix' => '%','type' => 'single']);
                $form->slider('green_ratio','绿化率')->options(['max' => 100, 'min' => 1, 'step' => 5, 'postfix' => '%']);
                $form->text('decorate_status','装修状态');
                $form->number('stop_car_seat','停车位');
                $form->currency('stop_car_price','停车费(元/小时)')->symbol('￥');
                $form->number('acreage','占地面积(平方米)');
                $form->text('wuye_company','物业公司');
                $form->text('developers','开发商');

                $form->divide();
                $form->display('created_at', '创建时间');
                $form->display('updated_at', '更新时间');


            })->tab('楼盘图片录入',function (Form $form){
                $form->multipleImage('project_pic','项目图片')->move('house_pics/')->uniqueName()->removable()->resize(712,425)->help('多图');
                $form->multipleImage('floor_plan','户型图')->move('house_pics/')->uniqueName()->removable()->resize(712,425)->help('多图');
                $form->multipleImage('prototype_room','样板间')->move('house_pics/')->uniqueName()->removable()->resize(712,425)->help('多图');
            });


            $form->saving(function (Form $form) {
                $city = $form->city;
                $city = Area::backAreaName($city);
                $city = $city['area_name'];
                $address = $form->name;
                $client = new Client();
                $url = "http://api.map.baidu.com/geocoder/v2/?address=$address&city=$city&output=json&ak=".config('app.BaiduMap.WebServer');
                $respone = $client->get($url);
                $res = json_decode($respone->getBody());
                if ($res->status == 0){
                    $form->input('lng',$res->result->location->lng);
                    $form->input('lat',$res->result->location->lat);
                }else{
                    throw new \Exception('请填写准确城市和地址，确定此地址在这个城市？');
                }
            });
        });
    }
}
