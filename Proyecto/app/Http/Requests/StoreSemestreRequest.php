<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSemestreRequest extends FormRequest
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
            // 'id_semestre' => 'required|unique:semestres,id_semestre|max:50', // El id es obligatorio, único y máximo 50 caracteres
            // 'nombre' => 'required|string|max:50', // El nombre es obligatorio, debe ser una cadena de texto de máximo 50 caracteres
            // 'fecha_inicio' => 'required|date|before:fecha_fin', // La fecha de inicio debe ser válida y antes de la fecha de fin
            // 'fecha_fin' => 'required|date|after:fecha_inicio', // La fecha de fin debe ser válida y después de la fecha de inicio
        ];
    }
}
