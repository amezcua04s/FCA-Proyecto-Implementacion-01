<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Proyecto;

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
            'metodo' => 'required|in:Deposito,Transferencia',
            'referencia' => 'required|string|max:255',
            'activo' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        $proyecto = Proyecto::find($this->input('proyecto'));
        $monto = $this->input('monto');
        $porPagar = $proyecto->total - $proyecto->pagado - $monto;

        if ($porPagar < 0) {
            $this->merge(['porPagar' => $porPagar]);
        }
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            //TO DO
        ];
    }
}
