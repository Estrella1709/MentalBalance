<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormulario extends FormRequest
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
            'q1' => 'required|in:si,no',
            'q2' => 'required|in:si,no',
            'q3' => 'required|in:si,no',
            'q4' => 'required|in:si,no',
            'q5' => 'required|in:si,no',
            'q6' => 'required|in:si,no',
            'q7' => 'required|in:si,no',
            'q8' => 'required|in:si,no',
            'q9' => 'required|in:si,no',
            'q10' => 'required|in:si,no',
            'q11' => 'required|in:si,no',
            'q12' => 'required|in:si,no',
            'q13' => 'required|in:si,no',
            'q14' => 'required|in:si,no',
            'q15' => 'required|in:si,no',
            'q16' => 'required|in:si,no',
            'q17' => 'required|in:si,no',
            'q18' => 'required|in:si,no',
            'q19' => 'required|in:si,no',
            'q20' => 'required|in:si,no'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Este campo es obligatorio.',
            '*.in' => 'Debe seleccionar una opción válida.',
        ];
    }
}
