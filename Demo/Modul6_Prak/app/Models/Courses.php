<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function students()
    // {
    //     return $this->belongsTo(Students::class);
    // }
    protected $fillable = [
        "name_course",
        "sks",
        "curriculum_semester"
    ];
}
