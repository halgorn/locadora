<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    public $table = 'locacao';
    protected $fillable = ['nome_locador', 'nome_filme','data_inicial','data_final','devolucao_usuario','devolucao_admin', 'dvd_devolvido' ];
}
