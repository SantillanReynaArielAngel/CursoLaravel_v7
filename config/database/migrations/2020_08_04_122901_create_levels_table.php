<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');//Levels name: bronze,silver,gold,platinum,diamond,master. Para asignar un valor por defecto: ->default(''bronze); 
                                    //OTRA OPCION  ES CREAR UN ARRAY PROTECTED EN EL MODELO,
                                    //ESPECIFICANDO EL NOMBRE DEL ATRIBUTO (Eje: name)
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
