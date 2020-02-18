<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComarcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comarca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->unsignedBigInteger('id_zona')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_provincia')->references('id')->on('provincia');
            $table->foreign('id_zona')->references('id')->on('zona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comarca');
    }
}
