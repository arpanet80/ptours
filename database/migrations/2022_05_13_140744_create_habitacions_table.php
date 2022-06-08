<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('price', 9, 3);
            $table->integer('quantity');
            $table->integer('rating')->default(0);;
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->unsignedBigInteger('tipo_habitacion_id');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('tipo_habitacion_id')->references('id')->on('tipo_habitacions')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacions');
    }
}
