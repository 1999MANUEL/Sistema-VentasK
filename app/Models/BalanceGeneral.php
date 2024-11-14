<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceGeneral extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total_activos',
        'total_pasivos',
        'total_patrimonio',
        'estado'
    ];

    public function cuentas()
    {
        return $this->hasMany(Cuenta::class);
    }
}
