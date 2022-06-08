<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_short');
            $table->longtext('description_large');
            $table->string('cover_img_url');
            $table->decimal('price', 9, 3);
            $table->integer('rating')->default(0);;
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tipo_paquete_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');       // si se elimina al usuario Se eliminan todos los registros de ese usuario en cascada
            $table->foreign('tipo_paquete_id')->references('id')->on('tipo_paquetes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
}
