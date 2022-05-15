<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->classe = Usuario::class;
    }
}
