<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablarestaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('descripcion',300)->nullable();;
            $table->string('ubicacion',200)->nullable();;
            $table->string('reserva',100)->nullable();
            $table->string('categoria',100)->nullable();;
            $table->string('img')->nullable();
            $table->string('horarioatencion',100)->nullable();
            $table->string('rangoprecios',100)->nullable();
            $table->string('sitioweb',255)->nullable();
            $table->string('telefono',100)->nullable();
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
        Schema::dropIfExists('restaurantes');
    }
}
