<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistroG extends FormRequest
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
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'telefono' => 'required|numeric|digits_between:10,15',
            'fecha_nacimiento' => 'required|date',
            'password' => 'required|min:6|confirmed',
            'user-type' => 'required|in:1,2'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es obligatorio.',
            'apellido_paterno.required' => 'El campo de apellido paterno es obligatorio.',
            'apellido_materno.required' => 'El campo de apellido materno es obligatorio.',
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'telefono.required' => 'El campo de teléfono es obligatorio.',
            'telefono.numeric' => 'El teléfono debe ser un número válido.',
            'telefono.digits_between' => 'El teléfono debe tener entre 10 y 15 dígitos.',
            'fecha_nacimiento.required' => 'El campo de fecha de nacimiento es obligatorio.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'user-type.required' => 'El tipo de usuario es obligatorio.',
            'user-type.in' => 'El tipo de usuario debe ser médico o paciente.'
        ];
    }
}
