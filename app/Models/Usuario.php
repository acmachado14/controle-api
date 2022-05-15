<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuarios";

    protected $fillable = [
        'nome',
    ];

    public function contas(){
        return $this->hasMany(Conta::class);
    }
}
