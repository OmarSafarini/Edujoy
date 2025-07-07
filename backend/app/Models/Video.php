<?php

namespace App\Models;

use App\Models\Lesson;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['lesson_id', 'title', 'video_url'];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

}
