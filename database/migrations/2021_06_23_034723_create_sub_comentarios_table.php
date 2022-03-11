<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('texto');
            $table->unsignedBigInteger('video_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('comentario_id')->nullable();
            $table->timestamps();

            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_comentarios');
    }
}
