<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->unsignedBigInteger('id_sujeto')->nullable();
            $table->unsignedBigInteger('estado')->nullable()
                   ->comment('0: eliminado, 1: Actito, 2: Pendiente de activar.');
            $table->date('fechaalta')->nullable();
            $table->boolean('nuevo')->default(false);
            $table->boolean('bloqueado')->default(false);
            $table->timestamps();
            
            //Relaciones
            $table->foreign('id_rol')->references('id')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
