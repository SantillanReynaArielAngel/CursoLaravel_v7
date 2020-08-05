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
            $table->string('usename');
            $table->string('password');

            $table->timestamps();

            //LLAVE EXTRANJERA (FOREANA) 1 A 1
            //$table->unsignedBigInteger('profile_id');//parametro: minuscula_modeloforeano+"_id"
            //$table->foreign('profile_id')-references('id')->on('profiles');//->foreign('parametro')->references('llave_modeloforeano')->on('plural_nombremodelo');
            
            //Llave extranjera(foreign) 1 a 1 NOTACION SIMPLIFICADA
            $table->foreignId('profile_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
