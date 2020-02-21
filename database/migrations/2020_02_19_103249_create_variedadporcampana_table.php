<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariedadporcampanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variedadporcampana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_variedad')->nullable();
            $table->unsignedBigInteger('id_campana')->nullable();
            $table->boolean('proteccion')->default(false)
                   ->comment('0: No Protegida, 1: Protegida');
            $table->date('fechafinproteccion')->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_variedad')->references('id')->on('variedad');
            $table->foreign('id_campana')->references('id')->on('campana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variedadporcampana');
    }
}
