<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariedadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variedad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->unsignedBigInteger('id_obtentor')->nullable();
            $table->unsignedBigInteger('id_representante')->nullable();
            $table->unsignedBigInteger('id_mandante')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('numeroregistro',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_especie')->references('id')->on('especie');
            $table->foreign('id_obtentor')->references('id')->on('titular');
            $table->foreign('id_representante')->references('id')->on('titular');
            $table->foreign('id_mandante')->references('id')->on('titular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variedad');
    }
}
