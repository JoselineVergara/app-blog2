<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_restaurante')->nullable()->constrained('tablarestaurantes')->cascadeOnUpdate()->nullOnDelete();
            $table->string('usuario');
            $table->text('comentario');
            $table->integer('una_estrella');
            $table->integer('dos_estrellas');
            $table->integer('tres_estrellas');
            $table->integer('cuatro_estrellas');
            $table->integer('cinco_estrellas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
