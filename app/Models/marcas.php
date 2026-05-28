<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    protected $table = 'marcas';

    protected $fillable = [
        'nome',
        'Origem',
    ];
}
