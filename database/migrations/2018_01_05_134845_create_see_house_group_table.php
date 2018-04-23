<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeeHouseGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('see_house_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('house_id');
            $table->timestamp('times')->nullable();
            $table->string('reason')->comment('推荐理由')->nullable();
            $table->string('services')->comment('承诺服务')->nullable();
            $table->string('join_address')->comment('集合地址')->nullable();
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
        Schema::dropIfExists('see_house_group');
    }
}
