<?php

namespace App\Admin\Controllers;

use App\Models\GroupBuy;

use App\Models\NewHouse;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class GroupBuyController extends Controller
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

            $content->header('团购');
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

            $content->header('团购');
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

            $content->header('团购');
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
        return Admin::grid(GroupBuy::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('to_new_house.default_pic','团购展示图片')->image();
            $grid->column('to_new_house.name','团购楼盘名称');
            $grid->column('price','团购价格(每平米)');
            $grid->start_time('团购开始时间');
            $grid->end_time('团购结束时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(GroupBuy::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->select('house_id')->options(function(){
                return NewHouse::all()->pluck('name','id');
            });
            $form->currency('price','团购价格(每平米)')->symbol('￥');
            $form->dateRange('start_time','end_time','团购时间');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
