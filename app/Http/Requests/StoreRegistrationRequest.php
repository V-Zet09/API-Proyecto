<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegistrationRequest extends FormRequest
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
            //
            'period_id' => ['required'],
            'activity_id' => ['required'],
            'instructor_id' => ['required'],
            'group_id' => ['required'],
            'area_id' => ['required'],
            'student_id' => ['required'],
            'grade' => ['required'],
            'career_id' => ['required'],
        ];

    }
}
