<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoyaltyporzonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('royaltyporzona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_royalty')->nullable();
            $table->unsignedBigInteger('id_zona')->nullable();
            $table->double('precioha', 8, 2)->nullable();
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_royalty')->references('id')->on('royalty');
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
        Schema::dropIfExists('royaltyporzona');
    }
}
