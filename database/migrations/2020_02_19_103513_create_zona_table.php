<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->string('codigo',300)->nullable();
           $table->string('nombre',300)->nullable();
           $table->string('descripcion',300)->nullable();
           $table->boolean('tipocultivo')->default(false)
                   ->comment('0: Secado, 1: Regadio');
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
        Schema::dropIfExists('zona');
    }
}
