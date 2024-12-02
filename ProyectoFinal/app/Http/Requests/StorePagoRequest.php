<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Proyecto;

class StorePagoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
            'proveedor' => 'required|exists:proveedor,id',
            'monto' => 'required|numeric|min:0',
            'fecha' => 'required|date',
            'metodo' => 'required|string|max:255',
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

    public function messages()
    {
        return [
            //TO DO
        ];
    }
}
