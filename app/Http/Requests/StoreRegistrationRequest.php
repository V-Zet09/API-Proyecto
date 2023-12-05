<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegistrationRequest extends FormRequest
{
    /**
     * **Determina si el usuario está autorizado a realizar esta solicitud.**
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Por defecto, permitimos que cualquier usuario cree registros.
        // Puedes personalizar esta lógica según tus necesidades.
        return true;
    }

    /**
     * **Define las reglas de validación para los campos del formulario.**
     *
     * Todos los campos son obligatorios para las solicitudes POST de creación de registros.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Campos relacionados con la inscripción
            'period_id' => ['required'], // ID del periodo
            'activity_id' => ['required'], // ID de la actividad
            'instructor_id' => ['required'], // ID del instructor
            'group_id' => ['required'], // ID del grupo
            'area_id' => ['required'], // ID del área
            'student_id' => ['required'], // ID del estudiante

            // Campos relacionados con el estudiante
            'grade' => ['required'], // Calificación del estudiante
            'career_id' => ['required'], // ID de la carrera
        ];
    }
}
