<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'razon' => 'required|string|max:255|unique:proveedor,razon,' . $this->route('proveedor'),
            'persona' => 'required|in:Física,Moral',
            'rfc' => 'required|string|max:13',
            'domicilio' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:proveedor,email,' . $this->route('proveedor'),
            'telefono' => 'nullable|string|max:10|unique:proveedor,telefono,' . $this->route('proveedor'),
        ];
    }

    public function messages()
    {
        return [
            //TO DO
    // Hacer uno por cada check
    // de razon, que sea requerido, que sea maximo 255 caracteres, que sea unico,
    // hacerlo asi para los demas
        ];
    }
}