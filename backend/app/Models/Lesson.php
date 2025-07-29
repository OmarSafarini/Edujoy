<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Video;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'name'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function videos() {
        return $this->hasMany(Video::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }
}