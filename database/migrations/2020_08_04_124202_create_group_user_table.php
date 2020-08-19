<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //LA TABLA PIVOT(INTERMEDIA) SE CREA EN SINGULAR EN ORDEN ALFABETICO utilizando snake_case
        Schema::create('group_user', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');//Para asignar un valor por defecto: ->default(true); 
                                            //OTRA OPCION  ES CREAR UN ARRAY PROTECTED EN EL MODELO,
                                            //ESPECIFICANDO EL NOMBRE DEL ATRIBUTO (Eje: is_active) 

            $table->timestamps();

            //LLAVE EXTRANJERA (FOREANA) 1 A 1
            //$table->unsignedBigInteger('user_id');//parametro: minuscula_modeloforeano+"_id"
            //$table->foreign('user_id')-references('id')->on('users');//->foreign('parametro')->references('llave_modeloforeano')->on('plural_nombremodelo');
            
            //Llave extranjera(foreign) 1 a 1 NOTACION SIMPLIFICADA
            $table->foreignId('group_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()
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
        Schema::dropIfExists('group_user');
    }
}
