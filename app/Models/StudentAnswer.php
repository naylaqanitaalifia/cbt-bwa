<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAnswer extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        "id",
    ];

    // cek pertanyaan mana yg dijawab oleh student
    public function question() {
        return $this->belongsTo(CourseQuestion::class, "course_question_id");
    }
}
