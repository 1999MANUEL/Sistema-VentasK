<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCuentaRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true; // Cambiar según la lógica de autorización que necesites
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'codigo' => 'required|string|max:255|unique:cuentas,codigo',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|in:activo,pasivo,capital,ingreso,gasto',
            'saldo_inicial' => 'required|numeric|min:0',
            //'descripcion' => 'nullable|string',
        ];
    }

    /**
     * Obtiene los mensajes de error para las reglas de validación definidas.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'codigo.required' => 'El código es obligatorio.',
            'codigo.string' => 'El código debe ser una cadena de caracteres.',
            'codigo.max' => 'El código no debe exceder los 255 caracteres.',
            'codigo.unique' => 'El código ya está en uso.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de caracteres.',
            'nombre.max' => 'El nombre no debe exceder los 255 caracteres.',
            'tipo.required' => 'El tipo es obligatorio.',
            'tipo.string' => 'El tipo debe ser una cadena de caracteres.',
            'tipo.in' => 'El tipo seleccionado no es válido.',
            'saldo_inicial.required' => 'El saldo inicial es obligatorio.',
            'saldo_inicial.numeric' => 'El saldo inicial debe ser un número.',
            'saldo_inicial.min' => 'El saldo inicial debe ser al menos 0.',
           // 'descripcion.string' => 'La descripción debe ser una cadena de caracteres.',
        ];
    }
}
