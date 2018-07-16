<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->integer('creator_id')->unsigned();
            $table->string('image', 300);
            $table->text('description');
            $table->enum('type', ['breakfast', 'lauch', 'dinner', 'snack']);
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('creators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
