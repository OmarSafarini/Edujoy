<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
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

    public function addLesson(Request $request, $courseId){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $lesson = Lesson::create([
            'course_id' => $courseId,
            'name' => $validated['name']
        ]);

        return response()->json($lesson, 201);
    }
}
