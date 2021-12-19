<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvd extends Model
{
    protected $fillable = ['nome', 'legenda','preco','quantidade'];
}
