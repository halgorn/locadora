<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   #criar tabela no banco
        Schema::create('dvds', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('legenda');
            $table->string('preco');
            $table->string('quantidade');
            $table->string('imagem');
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
        Schema::dropIfExists('dvds');
    }
}
