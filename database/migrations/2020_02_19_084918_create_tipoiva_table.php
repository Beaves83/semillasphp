<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoivaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoiva', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('descripcion',300)->nullable();
            $table->double('porcentaje', 8, 2)->nullable();
            $table->date('fechainicio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoiva');
    }
}
