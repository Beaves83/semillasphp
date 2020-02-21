<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoclienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipocliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_entidadbancaria')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('descripcion',300)->nullable();
            $table->double('descuento', 8, 2)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_entidadbancaria')->references('id')->on('entidadbancaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipocliente');
    }
}
