<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',225);
            $table->unsignedInteger('Director')->nullable();
            $table->string('describe',255);
            $table->unsignedTinyInteger('rate');
            $table->enum('released',[1,0])->nullable();
            $table->timestamp('release_at')->nullable();
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
        Schema::dropIfExists('admin_movies');
    }
}
