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
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');

            $table->timestamps();

            
            //LLAVE EXTRANJERA (FOREANA) 1 A 1
            //$table->unsignedBigInteger('level_id');//parametro: minuscula_modeloforeano+"_id"
            //$table->foreign('level_id')-references('id')->on('levels');//->foreign('parametro')->references('llave_modeloforeano')->on('plural_nombremodelo');
            //LLAVE EXTRANJERA (FOREANA) 1 A N NOTACION SIMPLIFICADA
            $table->foreignId('level_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
