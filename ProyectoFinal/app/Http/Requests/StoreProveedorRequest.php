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
            'razon' => 'required|string|max:255|unique:proveedor,razon,' ,
            'persona' => 'required|in:Física,Moral',
            'rfc' => 'required|string|max:13',
            'domicilio' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:proveedor,email,' ,
            'telefono' => 'nullable|string|max:10|unique:proveedor,telefono,',
        ];
    }

    public function messages()
    {
        return [
            'razon.required' => 'Se esperaba una razón',
            'razon.string' => 'Se esperaba una cadena',
            'razon.max' => 'El máximo de caracteres es 255',
            'razon.unique' => 'Se esperaba una razón diferente',
            'persona.required' => 'Se esperaba una persona',
            'persona.in' => 'Se esperaba una persona física o moral',
            'rfc.required' => 'Se esperaba un RFC',
            'rfc.string' => 'Se esperaba una cadena',
            'rfc.max' => 'El máximo de caracteres es 255',
            'domicilio.required' => 'Se esperaba un domicilio',
            'domicilio.string' => 'Se esperaba una cadena',
            'domicilio.max' => 'El máximo de caracteres es 255',
            'email.required' => 'Se esperaba un email',
            'email.string' => 'Se esperaba una cadena',
            'email.email' => 'Se esperaba un email',
            'email.max' => 'El máximo de caracteres es 255',
            'email.unique' => 'Se esperaba un email diferente',
            'telefono.nullable' => ' ',
            'telefono.string' => 'Se esperaba una cadena',
            'telefono.max' => 'El máximo de caracteres es 10',
            'telefono.unique' => 'Se esperaba un teléfono diferente',

        ];
    }
}