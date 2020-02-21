<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaracion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_campana')->nullable();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_representante')->nullable();
            $table->date('fechafinalizacion')->nullable();
            $table->date('fechapago')->nullable();
            $table->unsignedBigInteger('tipopresentacion')->default(0)
                    ->comment('0: Hectareas, 1: Quintales');
            $table->double('hectareas', 8, 2)->nullable();
            $table->double('quintales', 8, 2)->nullable();
            $table->double('importe', 8, 2)->nullable();
            $table->boolean('pagada')->default(false);
            $table->boolean('bloqueada')->default(false);
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_campana')->references('id')->on('campana');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_representante')->references('id')->on('titular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declaracion');
    }
}
