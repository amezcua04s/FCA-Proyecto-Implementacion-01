<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Permitir que la solicitud sea autorizada
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'activo' => 'boolean',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'subtotal' => 'required|numeric|min:0',
            'iva' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'concepto' => 'nullable|string|max:1000',
            'comentarios' => 'nullable|string|max:1000',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'Se esperaba un nombre',
            'nombre.string' => 'Se esperaba una cadena',
            'nombre.max' => 'El máximo de caracteres es 255',
            'activo.boolean' => 'Se esperaba un valor booleano (true o false)',
            'fecha_inicio.required' => 'Se esperaba una fecha inicial',
            'fecha_inicio.date' => 'Se esperaba una fecha',
            'fecha_fin.required' => 'Se esperaba una fecha final',
            'fecha_fin.date' => 'Se esperaba una fecha',
            'fecha_fin.after_or_equal' => 'Se esperaba una fecha igual o después a la fecha inicial',
            'subtotal.required' => 'Se esperaba un subtotal',
            'subtotal.numeric' => 'Se esperaba un número',
            'subtotal.min' => 'Se esperaba un mínimo de $0',
            'iva.required' => 'Se esperaba el IVA',
            'iva.numeric' => 'Se esperaba un número',
            'iva.min' => 'Se esperaba un mínimo de $0',
            'total.required' => 'Se esperaba el total',
            'total.numeric' => 'Se esperaba un número',
            'total.min' => 'Se esperaba un mínimo de $0',
            'concepto.nullable' => ' ',
            'concepto.string' => 'Se esperaba una cadena',
            'concepto.max' => 'El máximo de caracteres es 1000',
            'comentarios.nullable' => ' ',
            'comentarios.string' => 'Se esperaba una cadena',
            'comentarios.max' => 'El máximo de caracteres es 1000',
        ];
    }
}
