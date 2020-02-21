<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricopagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicopago', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_declaracion')->nullable();
            $table->unsignedInteger('id_usuario')->nullable();
            $table->date('fechaenvio')->nullable();
            $table->date('fecharespuesta')->nullable();
            $table->boolean('correcto')->default(false);
            $table->string('respuesta',500);
            $table->double('importe', 8, 2)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicopago');
    }
}
