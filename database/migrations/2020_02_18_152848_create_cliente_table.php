<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sujeto')->nullable();
            $table->unsignedBigInteger('id_tipocliente')->nullable();
            $table->unsignedBigInteger('id_entidadgestora')->nullable();
            $table->unsignedBigInteger('id_tipoiva')->nullable();
            $table->string('codigo',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_sujeto')->references('id')->on('sujeto');
            $table->foreign('id_tipocliente')->references('id')->on('tipocliente');
            $table->foreign('id_entidadgestora')->references('id')->on('entidadgestora');
            $table->foreign('id_tipoiva')->references('id')->on('tipoiva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
