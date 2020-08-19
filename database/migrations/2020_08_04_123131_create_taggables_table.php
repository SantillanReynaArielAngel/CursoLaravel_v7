<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->morphs('taggable');//parametro= minuscula_nombre_modelo(tabla)+"able". Creara las columnas parametro_id y parametro_type
            
            $table->timestamps();

            //LLAVE EXTRANJERA (FOREANA) 1 A 1
            //$table->unsignedBigInteger('tag_id');//parametro: minuscula_modeloforeano+"_id"
            //$table->foreign('tag_id')-references('id')->on('tags');//->foreign('parametro')->references('llave_modeloforeano')->on('plural_nombremodelo');
            
            //Llave extranjera(foreign) 1 a 1 NOTACION SIMPLIFICADA
            $table->foreignId('tag_id')->constrained()
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
        Schema::dropIfExists('taggables');
    }
}
