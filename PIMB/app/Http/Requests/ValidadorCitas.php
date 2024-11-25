<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorCitas extends FormRequest
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
            'fecha_cita' => ['required', 'date', 'after_or_equal:today'],
            'hora_cita' => ['required', 'date_format:H:i'],
            'tipoCita' => ['required', 'in:1,2'], // Solo acepta valores 1 o 2.
        ];
    }

    public function messages(): array
    {
        return [
            'fecha_cita.required' => 'La fecha de la cita es obligatoria.',
            'fecha_cita.after_or_equal' => 'La fecha debe ser hoy o futura.',
            'hora_cita.required' => 'La hora de la cita es obligatoria.',
            'hora_cita.date_format' => 'La hora debe tener el formato HH:mm.',
            'tipoCita.required' => 'Debes seleccionar un tipo de cita.',
            'tipoCita.in' => 'El tipo de cita seleccionado es inválido.',
        ];
    }
    
}
