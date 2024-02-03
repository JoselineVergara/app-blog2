<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbRestaurantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //el metodo up es para realizar una accion en este caso creamos una tabla
    public function up()
    {
        Schema::create('restaurantes',function(Blueprint $table){
            $table -> id();
            $table -> string('url_imagen');
            //este metodo crea dos columnas una en que momento se crea el registro y otra en el cual se modifica ese registro
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
     //metodo down para ververtir esa accion
    public function down()
    {
        //
    }
}
