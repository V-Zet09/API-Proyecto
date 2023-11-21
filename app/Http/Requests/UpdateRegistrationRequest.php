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
        $method = $this->method();
        if($method == 'PUT'){
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
        }
    }
}
