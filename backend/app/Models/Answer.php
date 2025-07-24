<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['id', 'question_id', 'answer_body', 'is_true'];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
