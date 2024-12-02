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
            'name.required' => 'Se esperaba un nombre',
            'name.string' => 'Se esperaba una cadena',
            'name.max' => 'El máximo de caracteres es 255',
            'email.required' => 'Se esperaba un email',
            'email.string' => 'Se esperaba una cadena',
            'email.email' => 'Se esperaba un email',
            'email.max' => 'El máximo de caracteres es 255',
            'email.unique' => 'Se esperaba un email diferente',
            'password.nullable' => ' ',
            'password.string' => 'Se esperaba una cadena',
            'password.min' => 'Se esperaban mínimo 8 caracteres',
            'password.confirmed' => 'Se confirmó el password',
            'password_confirmation.nullable' => ' ',
            'password_confirmation.string' => 'Se esperaba una cadena',
            'password_confirmation.min' => 'Se esperaban mínimo 8 caracteres',
            'admin.boolean' => 'Se esperaba un valor booleano (true o false)',
        ];
    }
}
