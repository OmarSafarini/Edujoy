<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
     protected $fillable = ['course_id', 'lesson_name'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function videos() {
        return $this->hasMany(Video::class);
    }
}
