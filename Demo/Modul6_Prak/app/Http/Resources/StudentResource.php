<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "courses_id"=>$this->course_id,
            "name_students"=>$this->name_students,
            "nim"=>$this->nim,
            "semester"=>$this->semester
        ];
    }
}
