<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // use HasFactory;

    // public function course()
    // {
    //     return $this->hasMany(Courses::class, 'courses_id', 'id');
    // }
    protected $fillable = [
        // "name_course",
        // "sks",
        // "curriculum_semester"
        "courses_id",
        "name_students",
        "nim",
        "semester"
    ];
}
