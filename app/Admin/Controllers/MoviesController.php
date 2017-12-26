<?php

namespace App\Admin\Controllers;

use App\Models\Movies;

use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MoviesController extends Controller
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

            $content->header('电影');
            $content->description('电影列表');

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

            $content->header('header');
            $content->description('description');

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

            $content->header('header');
            $content->description('description');

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
        return Admin::grid(Movies::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('title','电影名称');
            $grid->column('director','导演');
            $grid->describe('描述');
            $grid->rate('比率');
            $grid->released('是否上映')->display(function ($released) {
                return $released ? '是' : '否';
            });


            $grid->release_at('上映时间');
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');

            $grid->filter(function ($filter) {
                // 设置created_at字段的范围查询
                $filter->like('title','电影名称');
                $filter->like('describe','描述');
                $filter->between('created_at', '创建时间')->datetime();

            });

            $grid->paginate(15);
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Movies::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','电影标题');
            $directors = [
                1  =>   '冯小刚',
                2 =>    '王晶',
                3  =>   '傻逼',
            ];

            $form->select('director', '导演')->options($directors);
            // 添加describe的textarea输入框
            $form->textarea('describe', '简介');
            // 数字输入框
            $form->number('rate', '打分');


            // 添加开关操作
            $is_released = [
                'on'    =>  ['value' => '1','text' => '上映', 'success'],
                'off' => ['value' => '0', 'text' => '未上映', 'color' => 'danger'],
            ];
            $form->switch('released', '是否已上映')->states($is_released);
            // 添加日期时间选择框
            $form->datetime('release_at', '发布时间');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');

        });
    }
}
