<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtualizacaoLevelAdminUsuario extends Migration
{
    public function up()
    {
        //
        #atualizar a tabela do banco, pela migrate
        Schema::table('users', function(Blueprint $table){
            $table->boolean('cliente');
            $table->boolean('admin');
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
