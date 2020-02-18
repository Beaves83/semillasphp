<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poblacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->unsignedBigInteger('id_comarca')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_provincia')->references('id')->on('provincia');
            $table->foreign('id_comarca')->references('id')->on('comarca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poblacion');
    }
}
