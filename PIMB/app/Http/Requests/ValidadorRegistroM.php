<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistroM extends FormRequest
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
            //unique:medicos,cedula_profesional
            'cedula_profesional' => 'required|string|max:20',
            'especialidad' => 'required|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'cedula_profesional.required' => 'La cédula profesional es obligatoria.',
            'cedula_profesional.max' => 'La cédula profesional no puede exceder los 20 caracteres.',
            'cedula_profesional.unique' => 'Esta cédula profesional ya está registrada.',
            'especialidad.required' => 'La especialidad es obligatoria.',
            'especialidad.max' => 'La especialidad no puede exceder los 50 caracteres.',
        ];
    }
}
