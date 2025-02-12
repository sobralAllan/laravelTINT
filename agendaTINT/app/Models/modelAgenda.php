<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAgenda extends Model
{
    use HasFactory;//Fatoração - Dividir
    protected $table = 'registro'; //nome da Tabela
}//Coloco APENAS a tabela do banco de dados
