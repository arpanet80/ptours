<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longtext('description');
            $table->string('address');
            $table->string('coordinates')->default(0);
            $table->integer('rating')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();

            //$table->unsignedBigInteger('restaurant_menu_id');
            //$table->foreign('restaurant_menu_id')->references('id')->on('restaurant_menus')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
