<?php

namespace App\Models;

use App\Models\Enrollment;
use App\Models\Lesson;


use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

}
