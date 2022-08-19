<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;

    protected $table        = 'doador';
    protected $fillable     = [
        'nome'
        ,'email'
        ,'email_verified_at'
        ,'cpf'
        ,'telefone'
        ,'endereco'
        ,'nascimento'
        ,'estado'
        ,'formapg'
        ,'valordoado'
        ,'ultima_doacao'
        ,'intervalo'
        ,'create_at'
        ,'update_at'
    ];
}
