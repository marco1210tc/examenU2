<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this required.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the required.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cAluNombre' => 'required',
            'cAluCurso' => 'required',
            'nAluNota1' => 'required|numeric|between:0,20',
            'nAluNota2' => 'required|numeric|between:0,20',
        ];
    }

    public function messages()
    {
        return [
            'cAluNombre' => 'Este campo es obligatorio',
            'cAluCurso' => 'Este campo es obligatorio',
            'nAluNota1' => 'Este campo es obligatorio',
            'nAluNota2' => 'Este campo es obligatorio',
        ];
    }
}
