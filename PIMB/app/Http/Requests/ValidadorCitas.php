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
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'tipoCita' => 'required|in:1,2',
            'id_medico' => 'required|exists:medicos,id'
        ];
    }

    public function messages()
    {
        return [
            'fecha_cita.required' => 'La fecha de la cita es obligatoria.',
            'fecha_cita.date' => 'La fecha ingresada no es válida.',
    
            'hora_cita.required' => 'La hora de la cita es obligatoria.',
    
            'tipoCita.required' => 'El tipo de cita es obligatorio.',
            'tipoCita.in' => 'El tipo de cita seleccionado no es válido.',
    
            'id_medico.required' => 'El médico es obligatorio.',
            'id_medico.exists' => 'El médico seleccionado no existe en el sistema.',
        ];
    }
}
