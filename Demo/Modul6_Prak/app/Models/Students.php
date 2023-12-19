<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function course()
    {
        return $this->belongsTo(Courses::class, "courses_id",  "id");
    }
    protected $fillable = [
        "courses_id",
        "name_students",
        "nim",
        "semester"
    ];
}
