<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Support\Constants\TipoConta;

class ContaController extends Controller
{
    public function __construct()
    {
        $this->classe = Conta::class;
    }

    public function contasPorUsuario(int $idPagador)
    {
        $debitos = Conta::query()
            ->where('id_pagador', $idPagador)
            ->get();

        return $debitos;
    }

    public function contasEmConjunto()
    {
        $debitos = Conta::query()
            ->where('tipo_conta', TipoConta::CONJUNTO)
            ->get();

        return $debitos;
    }
}
