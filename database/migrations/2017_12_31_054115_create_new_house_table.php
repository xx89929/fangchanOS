<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_house', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('楼盘名称');
            $table->tinyInteger('sell_status')->default('3')->comment('售卖状态 1、在售  2、售馨 3、待售');
            $table->unsignedInteger('sell_price')->comment('售卖价格');
            $table->string('as_name')->default('Undefined')->comment('楼盘别名')->nullable();
            $table->unsignedInteger('broker')->default('0')->comment('经纪人')->nullable();
            $table->integer('province')->comment('省')->nullable();
            $table->integer('city')->comment('市')->nullable();
            $table->integer('district')->comment('区')->nullable();
            $table->string('address')->default('Undefined')->comment('楼盘地址');
            $table->string('wuye_using')->default('Undefined')->comment('物业用途')->nullable();
            $table->timestamp('sell_begin_time')->comment('开盘时间')->nullable();
            $table->timestamp('house_use_time')->comment('交房时间')->nullable();
            $table->string('house_number')->default('Undefined')->comment('预售证号')->nullable();
            $table->string('default_pic')->default('Undefined')->nullable();
            $table->string('sell_tel')->default('Undefined')->comment('售后电话')->nullable();
            $table->string('house_tag')->default('Undefined')->comment('楼盘标签')->nullable();
            $table->tinyInteger('is_display')->comment('是否显示')->nullable();
            $table->string('decorate_status')->default('Undefined')->comment('装修状况')->nullable();
            $table->integer('stop_car_seat')->comment('停车位')->nullable();
            $table->integer('stop_car_price')->comment('停车费')->nullable();
            $table->integer('plot_ratio')->comment('容积率')->nullable();
            $table->integer('green_ratio')->comment('绿化率')->nullable();
            $table->integer('acreage')->comment('占地面积')->nullable();
            $table->integer('average_money')->comment('平均价格')->nullable();
            $table->string('wuye_company')->default('Undefined')->comment('物业公司')->nullable();
            $table->string('developers')->default('Undefined')->comment('开发商')->nullable();
            $table->string('project_pic',999)->default('Undefined')->comment('项目图片')->nullable();
            $table->string('floor_plan',999)->default('Undefined')->comment('户型图')->nullable();
            $table->string('prototype_room',999)->default('Undefined')->comment('样板间')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_house');
    }
}
