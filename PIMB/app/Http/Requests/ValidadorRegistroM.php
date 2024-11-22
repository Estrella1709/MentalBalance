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
            'descripcion' => 'required|string|max:255|min:30',
            'especialidad' => 'required|in:1,2,3,4'
        ];
    }

    public function messages()
    {
        return [
            'cedula_profesional.required' => 'La cédula profesional es obligatoria.',
            'cedula_profesional.max' => 'La cédula profesional no puede exceder los 20 caracteres.',
            'cedula_profesional.unique' => 'Esta cédula profesional ya está registrada.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.max' => 'La descripción no puede exceder los 255 caracteres.',
            'descripcion.min' => 'La descripción debe tener mínimo 30 caracteres.',
            'especialidad.required' => 'El tipo de especialidad es obligatorio.',
            'especialidad.in' => 'El tipo de especialidad debe ser ansiedad, bipolaridad, depresión o TDAH'

        ];
    }
}
