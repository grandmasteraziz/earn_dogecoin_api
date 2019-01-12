<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileAppUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_app_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('active');
            $table->integer('user_id')->unsigned();
            $table->integer('mobile_app_id')->unsigned();
        
         

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mobile_app_id')->references('id')->on('mobile_apps');
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
        Schema::dropIfExists('mobile_app_user');
    }
}
