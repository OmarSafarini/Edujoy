<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Notification;
use App\Models\User;
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
        $users = User::all();
        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id,
                'title' => 'درس جديد مضاف',
                'body' => "تم إضافة درس جديد بعنوان: {$lesson->name} في كورس رقم {$courseId}",
                'read_status' => 'unread',
            ]);
        }

        return response()->json($lesson, 201);
    }
}
