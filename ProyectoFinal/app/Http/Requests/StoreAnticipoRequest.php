<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnticipoRequest extends FormRequest
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
            'proyecto' => 'required|exists:proyecto,id',
            'cliente' => 'required|exists:cliente,id',
            'monto' => 'required|numeric|min:0',
            'fecha' => 'required|date',
            'metodo' => 'required|in:Efectivo,Transferencia,Cheque',
            'referencia' => 'required|string|max:255',
            'activo' => 'boolean',
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
            //TO DO
        ];
    }
}
