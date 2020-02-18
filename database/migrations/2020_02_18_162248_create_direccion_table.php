<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_poblacion')->nullable();
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->unsignedBigInteger('id_pais')->nullable();
            $table->unsignedBigInteger('id_comunidadautonoma')->nullable();
            $table->string('direccion',3000)->nullable();
            $table->string('cp',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_poblacion')->references('id')->on('poblacion');
            $table->foreign('id_provincia')->references('id')->on('provincia');
            $table->foreign('id_pais')->references('id')->on('pais');
            $table->foreign('id_comunidadautonoma')->references('id')->on('comunidadautonoma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
