<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            
            $table->timestamps();

            //LLAVE EXTRANJERA (FOREANA) 1 A 1
            //$table->unsignedBigInteger('user_id');//parametro: minuscula_modeloforeano+"_id"
            //$table->foreign('user_id')-references('id')->on('users');//->foreign('parametro')->references('llave_modeloforeano')->on('plural_nombremodelo');
            
            //Llave extranjera(foreign) 1 a 1 NOTACION SIMPLIFICADA
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('category_id')->constrained()
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
        Schema::dropIfExists('posts');
    }
}
