<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        "id",
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function answer() {
        return $this->hasMany(CourseAnswer::class, "course_question_id", "id");
    }
}
