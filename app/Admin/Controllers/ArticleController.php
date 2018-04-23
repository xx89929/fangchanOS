<?php

namespace App\Admin\Controllers;

use App\Models\ Article;

use App\Models\ArticleClassify;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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

            $content->header('房产资讯');
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

            $content->header('房产资讯');
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

            $content->header('房产资讯');
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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('资讯标题');
            $grid->column('get_article_cl.name','资讯分类');
            $grid->column('ready_num','阅读数');
            $issue = [
                'on'  => ['value' => 1, 'text' => '已发布', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '未发布', 'color' => 'danger'],
            ];
            $grid->issue()->switch($issue);

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->select('classify','资讯分类')->options(function(){
                return ArticleClassify::all()->pluck('name','id');
            });
            $form->number('ready_num','阅读数量');

            $issue = [
                'on'  => ['value' => 1, 'text' => '已发布', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '未发布', 'color' => 'danger'],
            ];
            $form->switch('issue','是否发布')->states($issue);
            $form->editor('content','资讯内容');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
