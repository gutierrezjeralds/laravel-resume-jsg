<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSplashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('splash', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page');
            $table->string('title');
            $table->string('description');
            $table->string('slogan');
            $table->string('button_string');
            $table->string('button_link');
            $table->string('button_icon');
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
        Schema::dropIfExists('splash');
    }
}
