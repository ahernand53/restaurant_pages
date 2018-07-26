<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsMenuTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_menus', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('foods_id');
            $table->unsignedInteger('menus_id');
            $table->timestamps();

            $table->foreign('foods_id')->references('id')->on('foods');
            $table->foreign('menus_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods_menus', function (Blueprint $table){
            $table->dropForeign('foods_menus_foods_id_foreign');
            $table->dropForeign('foods_menus_menus_id_foreign');
        });

        Schema::dropIfExists('foods_menus');
    }
}
