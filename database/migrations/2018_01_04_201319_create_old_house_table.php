<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_house', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('build_years')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->integer('province')->nullable();
            $table->integer('city')->nullable();
            $table->integer('district')->nullable();
            $table->string('address')->nullable();
            $table->integer('broker')->nullable();
            $table->string('default_pic')->nullable();
            $table->unsignedInteger('average_price')->nullable();
            $table->integer('sell_status')->nullable();
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
        Schema::dropIfExists('old_house');
    }
}
