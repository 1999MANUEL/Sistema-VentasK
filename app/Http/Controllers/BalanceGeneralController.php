<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class BalanceGeneralController extends Controller
{
    public function index()
    {
        // Obtener los saldos de las cuentas agrupadas por tipo
        $activos = Cuenta::where('tipo', 'Activo')->get();
        $pasivos = Cuenta::where('tipo', 'Pasivo')->get();
        $patrimonio = Cuenta::where('tipo', 'Patrimonio')->get();

        // Calcular los totales
        $totalActivos = $activos->sum('saldo');
        $totalPasivos = $pasivos->sum('saldo');
        $totalPatrimonio = $patrimonio->sum('saldo');

        return view('balance.index', compact('activos', 'pasivos', 'patrimonio', 'totalActivos', 'totalPasivos', 'totalPatrimonio'));
    }
}
