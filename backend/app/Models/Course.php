<?php

namespace App\Models;

use App\Models\Enrollment;
use App\Models\Lesson;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{

    use HasFactory;

    protected $fillable = ['name','description'];


    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

}
