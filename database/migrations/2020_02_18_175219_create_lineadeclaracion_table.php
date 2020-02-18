<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineadeclaracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineadeclaracion', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('id_declaracion')->nullable();
            $table->unsignedBigInteger('id_zona')->nullable();
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->unsignedBigInteger('id_variedad')->nullable();
            $table->unsignedBigInteger('id_especie')->nullable();
            $table->unsignedBigInteger('id_poblacion')->nullable();
            $table->unsignedBigInteger('id_declaracionagrupada')->nullable();
            $table->date('fechafinalizacion')->nullable();
            $table->date('fechapago')->nullable();
            $table->date('fechacreacion')->nullable();
            $table->unsignedBigInteger('tipocultivo')->default(0);
            $table->double('cantidad', 8, 2)->nullable();
            $table->double('importe', 8, 2)->nullable();
            $table->double('importebonificacion', 8, 2)->nullable();
            $table->double('importebase', 8, 2)->nullable();
            $table->double('importeiva', 8, 2)->nullable();
            $table->double('importetotal', 8, 2)->nullable();
            $table->unsignedBigInteger('unidadmedida')->default(0)
                    ->comment('0: Hectareas, 1: Quintales');
            $table->boolean('enviadanavision')->default(false);
            $table->boolean('pagada')->default(false);
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_declaracion')->references('id')->on('declaracion');
            $table->foreign('id_zona')->references('id')->on('zona');
            $table->foreign('id_provincia')->references('id')->on('provincia');
            $table->foreign('id_variedad')->references('id')->on('variedad');
            $table->foreign('id_especie')->references('id')->on('zona');
            $table->foreign('id_poblacion')->references('id')->on('provincia');
            $table->foreign('id_declaracionagrupada')->references('id')->on('declaracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineadeclaracion');
    }
}
