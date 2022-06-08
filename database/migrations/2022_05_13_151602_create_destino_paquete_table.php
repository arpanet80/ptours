<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinoPaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_paquete', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('destino_id');
            $table->unsignedBigInteger('paquete_id');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('cascade');
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destino_paquete');
    }
}
