<?php

namespace App\Admin\Controllers;

use App\Models\NewHouse;
use App\Models\SeeHouseGroup;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SeeHouseGroupController extends Controller
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

            $content->header('看房团');
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

            $content->header('看房团');
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

            $content->header('看房团');
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
        return Admin::grid(SeeHouseGroup::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('get_new_house.default_pic','楼盘展示图片')->image();
            $grid->column('get_new_house.name','楼盘名称');
            $grid->column('times','看房时间');
            $grid->column('services','承诺服务');
            $grid->column('reason','推荐理由');
            $grid->column('join_address','集合地址');
            $grid->column('master_num','报名数(人)');
            $grid->column('end_time','报名结束时间');

            $grid->created_at('创建时间')->sortable();
            $grid->updated_at('更新时间')->sortable();

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SeeHouseGroup::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->select('house_id','选择房源')->options(function(){
                return NewHouse::all()->pluck('name','id');
            });
            $form->datetime('times','看房时间');
            $form->text('reason','推荐理由');
            $form->tags('services','承诺服务')->help('多个服务按“回车”键，分隔');
            $form->text('join_address','集合地点');
            $form->datetime('end_time','报名结束时间');
            $form->number('master_num','报名数(人)');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
