<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    // Por defecto, permitimos que cualquier usuario modifique registros.
        // Puedes personalizar esta lógica según tus necesidades.
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * **Define las reglas de validación para los campos del formulario.**
     *
     * Las reglas se aplican de forma diferente según el método de la solicitud:
     *
     * * **PUT:** Todos los campos son obligatorios.
     * * **PATCH:** Los campos son opcionales, pero se validarán si están presentes en la solicitud.
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        // Reglas comunes para todos los métodos
        if($method == 'PUT'){
            // **Para PUT, todos los campos son obligatorios.**
            return [
                'period_id' => ['required'],
                'activity_id' => ['required'],
                'instructor_id' => ['required'],
                'group_id' => ['required'],
                'area_id' => ['required'],
                'student_id' => ['required'],
                'grade' => ['required'],
                'career_id' => ['required'],
            ];
        }else{
            return [
                'period_id' => ['sometimes','required'],
                'activity_id' => ['sometimes','required'],
                'instructor_id' => ['sometimes','required'],
                'group_id' => ['sometimes','required'],
                'area_id' => ['sometimes','required'],
                'student_id' => ['sometimes','required'],
                'grade' => ['sometimes','required'],
                'career_id' => ['sometimes','required'],
            ];
            // **Para PATCH, los campos son opcionales pero se validan si están presentes.**
            // **IMPORTANTE:** No modifiquemos el código heredado de FormRequest.
            // En su lugar, utilicemos un comentario para explicar lo que hace.

            // Agregamos un comentario para explicar que los campos son opcionales en las solicitudes PATCH.
            // Este comentario se puede utilizar para documentar el código y ayudar a los desarrolladores a comprender cómo funciona.
            // ```
            // // Para PATCH, los campos son opcionales pero se validan si están presentes.
            // ```

            // El código heredado de FormRequest sigue funcionando correctamente.
            // Los campos son opcionales en las solicitudes PATCH, como se esperaba.
        }
    }
}
