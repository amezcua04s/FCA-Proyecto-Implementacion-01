<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->route('usuario'),
            'password' => 'nullable|string|min:8|confirmed',
            'password_confirmation' => 'nullable|string|min:8',
            'admin' => 'boolean',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
    */
    public function messages(): array
    {
        return [
            'name.required' => 'Se esperaba algún valor en el campo NOMBRE',
            'name.max' => 'El máximo de caracteres es 50',
            'email.required' => 'Debe inresar un email',
            'email.email' => 'Debe respetar el formato esperado de email',
            'email.max' => 'El máximo de caracteres es de 100',
            'email.unique' => 'El email ya esta registrado con un usuario diferente al que esta siendo editado, ingrese un email diferente',
            'password' => 'no',
            'admin' => 'boolean',
            
        ];
    }
}
