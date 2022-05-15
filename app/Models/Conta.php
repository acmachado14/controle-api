<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $table = "contas";

    protected $fillable = [
        'descricao',
        'valor',
        'valor_pago',
        'tipo_pagamento',
        'tipo_conta',
        'id_pagador',
        'validade',
        'data_pagamento',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
