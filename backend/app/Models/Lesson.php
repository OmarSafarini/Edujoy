<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
<<<<<<< HEAD
    
=======
     protected $fillable = ['course_id', 'lesson_name'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function videos() {
        return $this->hasMany(Video::class);
    }
>>>>>>> 62add846873a51322871ba1193ff21b1405c686f
}
