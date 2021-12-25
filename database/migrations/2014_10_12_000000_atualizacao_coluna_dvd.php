<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtualizacaoColunaDvd extends Migration
{
    public function up()
    {
        //
        #atualizar a tabela do banco, pela migrate
        Schema::table('dvds', function(Blueprint $table){
            $table->string('imagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

    }
}
