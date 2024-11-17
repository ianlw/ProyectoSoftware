<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSemestreRequest extends FormRequest
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
            'id_semestre' => 'required|exists:semestres,id_semestre', // El id debe existir en la tabla 'semestres'
            'nombre' => 'required|string|max:50', // El nombre es obligatorio, debe ser una cadena de texto, con un máximo de 50 caracteres
            'fecha_inicio' => 'required|date|before:fecha_fin', // La fecha de inicio es obligatoria y debe ser una fecha válida
            'fecha_fin' => 'required|date|after:fecha_inicio', // La fecha de fin es obligatoria y debe ser posterior a la fecha de inicio
        ];
    }
}
