<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadautonomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidadautonoma', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('id_pais')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_pais')->references('id')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunidadautonoma');
    }
}
