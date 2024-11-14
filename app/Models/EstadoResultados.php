<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoResultados extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total_ingresos',
        'total_gastos',
        'utilidad_neta',
        'estado'
    ];

    public function cuentas()
    {
        return $this->hasMany(Cuenta::class);
    }
}
