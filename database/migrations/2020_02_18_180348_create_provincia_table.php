<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pais')->nullable();
            $table->unsignedBigInteger('id_comunidadautonoma')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->timestamps();
            
            //Relaciones
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
        Schema::dropIfExists('provincia');
    }
}
