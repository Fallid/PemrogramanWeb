<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    // public function judger(){
    //     return $this->belongsTo(Students::class, 'judger_id', 'id');
    // }
    protected $fillable = [
        "name_course",
        "sks",
        "curriculum_semester"
    ];
}
