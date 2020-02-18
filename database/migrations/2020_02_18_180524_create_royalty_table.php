<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoyaltyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('royalty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_campana')->nullable();
            $table->double('nota', 8, 2)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_campana')->references('id')->on('campana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('royalty');
    }
}
