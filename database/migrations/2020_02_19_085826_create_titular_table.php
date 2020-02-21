<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titular', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sujeto')->nullable();
            $table->string('codigo',300)->nullable();
            $table->string('nombre',300)->nullable();
            $table->string('descripcion',300)->nullable();
            $table->unsignedBigInteger('tipo')->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_sujeto')->references('id')->on('sujeto')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titular');
    }
}
