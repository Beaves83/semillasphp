<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSujetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujeto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_direccion')->nullable();
            $table->unsignedBigInteger('id_tiposujeto')->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('primerapellido',300)->nullable();
            $table->string('segundoapellido',300)->nullable();
            $table->string('identificador',300)->nullable();
            $table->string('telefono',300)->nullable();
            $table->string('email',300)->nullable();
            $table->date('fechacreacion')->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_direccion')->references('id')->on('direccion')
                    ->onDelete('cascade');
            $table->foreign('id_tiposujeto')->references('id')->on('tiposujeto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sujeto');
    }
}
