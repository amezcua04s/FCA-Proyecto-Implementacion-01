<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'razon' => 'required|string|max:255|unique:cliente,razon,' . $this->route('cliente'),
            'persona' => 'required|in:Física,Moral',
            'rfc' => 'required|string|max:13',
            'domicilio' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:cliente,email,' . $this->route('cliente'),
            'telefono' => 'nullable|string|max:10|unique:cliente,telefono,' . $this->route('cliente'),
        ];
    }

    public function messages()
    {
        return [
           //TO DO
        ];
    }
}
