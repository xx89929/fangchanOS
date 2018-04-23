<?php

namespace App\Admin\Controllers;

use App\Models\Area;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
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

            $content->header('区域树');

            $content->body(Area::tree(function ($tree) {
                $tree->branch(function ($branch) {
                    return "{$branch['area_name']}";
                });
            }));
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
        return Admin::grid(Area::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

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
        return Admin::form(Area::class, function (Form $form) {

            $form->display('id', 'ID');

            $area_type = [
              '0' => '国家',
              '1' => '省',
              '2' => '市',
              '3' => '区',
              '4' => '县/乡/镇',
            ];
            $form->select('area_type', '区域类型')->options($area_type);
            $form->text('area_name');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    public function getAreaParent(Request $request){
        $parent_id = $request->get('q');
        return Area::where('parent_id',$parent_id)->get(['id', DB::raw('area_name as text')]);
    }
}
