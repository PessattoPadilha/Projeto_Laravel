<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
        'nome',
        'cnpj',
        'contato',
    ];
}
