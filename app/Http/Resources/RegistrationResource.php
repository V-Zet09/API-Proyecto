<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'period_id' => $this->period_id,
            'activity_id' => $this->activity_id,
            'instructor_id' => $this->instructor_id,
            'group_id' => $this->group_id,
            'area_id' => $this->area_id,
            'career_id' => $this->career_id,
            'grade' => $this->grade,
            'student_id' => $this->student_id,
        ];
    }
}
