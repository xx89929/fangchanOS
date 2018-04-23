<?php

namespace App\Admin\Controllers;

use App\Models\Account;
use App\Models\Area;
use App\Models\HouseSellStatus;
use App\Models\OldHouse;

use Encore\Admin\Config\Config;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class OldHouseController extends Controller
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

            $content->header('二手房');
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

            $content->header('二手房');
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

            $content->header('二手房');
            $content->description('创建');

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
        return Admin::grid(OldHouse::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->default_pic('展示相册')->image();
            $grid->column('get_account_info.head_pic','归属经纪人')->image();
            $grid->price('总价');
            $grid->square_price('每平米价格');
            $grid->name('房源名称');
            $grid->build_years('建筑年代');
            $grid->column('getSellStatus.name','售卖状态')->display(function ($name){
                $color = HouseSellStatus::where('name',$name)->first();
                return "<span class='label' style='background-color: $color->color'>$name</span>";
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
        return Admin::form(OldHouse::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->tab('基本信息',function (Form $form){
                /**
                 * 基本信息
                 */
                $form->image('default_pic','展示图片')->move('house_pics/')->uniqueName()->resize(712,425);
                $form->text('name','房源名称');
                $form->currency('price','总价格（万元）')->symbol('￥');
                $form->currency('square_price','每平米（元）')->symbol('￥');
                $form->select('broker','经纪人')->options(function(){
                    return Account::getBroker()->with('get_account_info')->get()->pluck('get_account_info.nick_name','id');
                });
                $form->select('sell_status','售卖状态')->options(function (){
                    return HouseSellStatus::all()->pluck('name','id');
                });

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

                $form->slider('build_years','建筑年代（建成）')->options(['max' => 2017, 'min' => 1960, 'step' => 5, 'postfix' => 'years']);

                $form->display('created_at', 'Created At');
                $form->display('updated_at', 'Updated At');
            })->tab('基本属性',function (Form $form){
                /**
                 * 基本属性
                 */
                $form->text('community_name','小区名称');
                $form->text('see_house_time','看房时间')->default('随时看房');
                $form->text('nearby_school','附近学校');
                $form->text('house_type','房屋户型')->default('3室2厅1厨1卫');

                $at_floor = [
                    '底层' => '底层',
                    '中层' => '中层',
                    '高层' => '高层',
                ];
                $form->select('at_floor','所在楼层')->options($at_floor);
                $form->number('count_floor','总共楼层');
                $form->number('build_area','建筑面积(平米)');

                $room_structure = [
                    '平层' => '平层',
                    '跃层' => '跃层',
                    '复式' => '复式',
                ];
                $form->select('room_structure','	户型结构')->options($room_structure);
                $form->text('orientation','房屋朝向')->default('南北');

                $decorate = [
                    '普通装修' => '普通装修',
                    '精装修' => '精装修',
                    '毛坯' => '毛坯',
                ];
                $form->select('decorate','装修状态')->options($decorate);

                $is_elevator = [
                    'on'  => ['value' => '有', 'text' => '有', 'color' => 'success'],
                    'off' => ['value' => '无', 'text' => '无', 'color' => 'danger'],
                ];
                $form->switch('is_elevator','是否有电梯')->states($is_elevator);
            })->tab('交易属性',function (Form $form){
                /**
                 * 交易属性
                 */
                $form->text('room_effect','房屋用途')->placeholder('如：住宅');
                $form->number('room_age_limit','房屋年限(年)')->default(70);
                $form->text('pledge','抵押信息')->placeholder('如：抵押');
                $form->text('room_permit','房本备件')->default('已上传房本照片');
                $form->text('room_coding','房源编码')->placeholder('如：170291730012');
                $form->dateRange('entrust_time_start','entrust_time_end','委托时间');


            })->tab('房源点评',function (Form $form){
                /**
                 * 房源点评
                 */
                $form->text('room_tags','房源标签')->placeholder('
如：距离1号线(罗宝线)大剧院站约474米');
                $form->text('room_trait','房源亮点')->placeholder('如：
精装修，户型方正实用，双阳台双卫，业主换房诚意出售，看房方便');
                $form->text('traffic_trip','交通出行')->placeholder('如：毗邻地铁大剧院站，靠近地铁9号线鹿丹村站。毗邻深南路');
                $form->text('near_fittings','周边配套')->placeholder('如：
毗邻万象城、深圳书城、信兴广场、京基');
                $form->text('layout','布局装修')->placeholder('如：
3房2厅2卫2阳，客厅出大阳台看风景河景观');
            })->tab('图片信息',function (Form $form){
                $form->multipleImage('room_pics','室内图片')->move('house_pics/')->uniqueName()->removable()->resize(712,425)->help('卧室、客厅、阳台、厨房图片(多图)');
                $form->multipleImage('house_pics','室外图片')->move('house_pics/')->uniqueName()->removable()->resize(712,425)->help('小区环境、周边设施(多图)');;
            });
        });
    }
}
