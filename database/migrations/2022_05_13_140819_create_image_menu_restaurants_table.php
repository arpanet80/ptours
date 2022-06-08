<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageMenuRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_menu_restaurants', function (Blueprint $table) {
            $table->id();
            //$table->string('name');
            //$table->text('description');
            $table->text('url');
            $table->timestamps();

            $table->unsignedBigInteger('restaurant_menu_id');
            $table->foreign('restaurant_menu_id')->references('id')->on('restaurant_menus')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_menu_restaurants');
    }
}
