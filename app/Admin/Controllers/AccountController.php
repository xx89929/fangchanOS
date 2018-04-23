<?php

namespace App\Admin\Controllers;

use App\Models\Account;

use App\Models\AccountType;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AccountController extends Controller
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

            $content->header('账号');
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

            $content->header('账号');
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

            $content->header('账号');
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
        return Admin::grid(Account::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->account_id('账号');

            $grid->column('getAccountType.type_name','账号类型');
            $grid->column('get_account_info.nick_name','名称');
            $grid->column('get_account_info.phone','手机');
            $grid->column('get_account_info.weixin_code','二维码')->image('',100,100);
            $grid->column('get_account_info.head_pic','头像')->image('',100,100);
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Account::class, function (Form $form) {

            $form->tab('基本信息',function (Form $form){
                $form->display('id', 'ID');
                $form->text('account_id','账号');
                $form->select('type_id', '账号类型')->options(
                    AccountType::all()->pluck('type_name','type_id')
                );
                $form->display('created_at', 'Created At');
                $form->display('updated_at', 'Updated At');

            })->tab('详细信息',function (Form $form){
                $form->text('get_account_info.nick_name','名称');
                $form->mobile('get_account_info.phone','手机')->options(['mask' => '999 9999 9999']);
                $form->image('get_account_info.weixin_code','微信二维码')->move('account/weixin')->uniqueName()->resize(100,100)->removable();
                $form->image('get_account_info.head_pic','头像')->move('account/head_pic')->uniqueName()->removable()->resize(100,100);

            })->tab('安全信息',function (Form $form){
                $form->password('account_psw', trans('admin.password'))->rules('required|confirmed');
                $form->password('account_psw_confirmation', trans('admin.password_confirmation'))->rules('required')
                    ->default(function ($form) {
                        return $form->model()->account_psw;
                    });
                $form->ignore(['account_psw_confirmation']);
            });

            $form->saving(function (Form $form) {
                if ($form->account_psw) {
                    $form->account_psw = bcrypt($form->account_psw);
                }
            });

        });
    }
}
