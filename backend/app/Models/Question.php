<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['id', 'lesson_id', 'question_body'];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
