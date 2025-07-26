<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getVideosForCourse($courseId)
    {
        $course = Course::with(['lessons.videos'])->findOrFail($courseId);
        return response()->json([$course]);
    }

    public function getAllCourses()
    {
        $course = Course::all();
        return response()->json($course);
    }
}
