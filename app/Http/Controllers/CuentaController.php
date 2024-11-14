<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Cuenta;
use Exception;
use Illuminate\Support\Facades\DB;

class CuentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:ver-cuenta|crear-cuenta|editar-cuenta|eliminar-cuenta', ['only' => ['index']]);
        $this->middleware('permission:crear-cuenta', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-cuenta', ['only' => ['edit', 'update']]);
        $this->middleware('permission:eliminar-cuenta', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuentas = Cuenta::latest()->get();
        return view('cuenta.index', ['cuentas' => $cuentas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCuentaRequest $request)
    {
        try {
            DB::beginTransaction();
            Cuenta::create($request->validated());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('cuenta.index')->with('error', 'Error al registrar la cuenta');
        }

        return redirect()->route('cuenta.index')->with('success', 'Cuenta registrada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuenta $cuenta)
    {
        return view('cuenta.edit', ['cuenta' => $cuenta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCuentaRequest $request, Cuenta $cuenta)
    {
        $cuenta->update($request->validated());

        return redirect()->route('cuenta.index')->with('success', 'Cuenta editada');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuenta $cuenta)
    {
        $message = '';
        if ($cuenta->estado == 1) {
            $cuenta->update(['estado' => 0]);
            $message = 'Cuenta eliminada';
        } else {
            $cuenta->update(['estado' => 1]);
            $message = 'Cuenta restaurada';
        }

        return redirect()->route('cuenta.index')->with('success', $message);
    }
}
