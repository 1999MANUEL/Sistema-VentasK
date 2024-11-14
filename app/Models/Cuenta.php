<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'tipo',  // Puede ser 'activo', 'pasivo', 'patrimonio', 'ingreso', 'gasto'
        'saldo_inicial',
        'estado'
    ];

    public function balanceGeneral()
    {
        return $this->hasOne(BalanceGeneral::class);
    }

    public function estadoResultados()
    {
        return $this->hasOne(EstadoResultados::class);
    }
}
