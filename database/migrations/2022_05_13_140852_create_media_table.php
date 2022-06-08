<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            //$table->string('name');
            //$table->string('description');
            $table->string('url');
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tipo_media_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipo_media_id')->references('id')->on('tipo_media')->onDelete('cascade');
            $table->unsignedBigInteger('mediable_id');
            $table->string('mediable_type');
            //$table->primary(['mediable_id','mediable_type']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
