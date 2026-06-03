<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'estoque',
        'id_fornecedores',
        'id_marcas',
        'id_categorias',
    ];

    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'id_categorias');
    }

    public function marca()
    {
        return $this->belongsTo(marcas::class, 'id_marcas');
    }

    public function fornecedor()
    {
        return $this->belongsTo(fornecedores::class, 'id_fornecedores');
    }


}
