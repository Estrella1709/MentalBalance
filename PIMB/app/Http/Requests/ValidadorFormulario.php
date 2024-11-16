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
            'q1' => 'required|in:a,b,c,d',
            'q2' => 'required|in:a,b,c,d',
            'q3' => 'required|in:a,b,c,d',
            'q4' => 'required|in:a,b,c,d',
            'q5' => 'required|in:a,b,c,d',
            'q6' => 'required|in:a,b,c,d',
            'q7' => 'required|in:a,b,c,d',
            'q8' => 'required|in:a,b,c,d',
            'q9' => 'required|in:a,b,c,d',
            'q10' => 'required|in:a,b,c,d',
            'q11' => 'required|in:a,b,c,d',
            'q12' => 'required|in:a,b,c,d',
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
