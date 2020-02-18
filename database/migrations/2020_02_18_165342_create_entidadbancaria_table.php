<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadbancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidadbancaria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('iban',300)->nullable();
            $table->string('clavecomercio',300)->nullable();
            $table->unsignedInteger('codigocomerciante')->nullable();
            $table->unsignedInteger('terminal')->nullable();
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
        Schema::dropIfExists('entidadbancaria');
    }
}
