<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_short');
            $table->longtext('description_large');
            //$table->enum('status', [0, 1])->default(1);
            $table->decimal('price', 9, 3);
            $table->integer('rating')->default(0);;
            $table->boolean('status')->default(1);

            $table->integer('duration')->default(1);        // en dias
            $table->string('languaje');
            $table->text('itinerary');       // Desde el punto de encuentro en Cancún o Riviera Maya entre las 4:00 AM y las 5:10 AM de abril a octubre o entre las 5:00 AM y las 6:10 AM de noviembre a marzo
            $table->string('startplace');
            $table->string('endplace');
            $table->string('route')->nullable();;        // separado por comas
            $table->text('attractive')->nullable();;      // tractivos que se veran en la ruta
            //$table->date('startdate');      // cuando inicia el viaje
            //$table->boolean('starthour');

            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinos');
    }
}
