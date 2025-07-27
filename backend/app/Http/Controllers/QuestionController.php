<?php

namespace App\Http\Controllers;
use App\Models\Question;   
use App\Models\Lesson;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getByLesson($lessonId)
    {
       $lesson = Lesson::with(['questions.answers'])->find($lessonId);

        if (!$lesson) {
            return response()->json(['message' => 'الدرس غير موجود'], 404);
        }

        return response()->json($lesson);
    }

    public function getAllQuestions()
    {
        $questions = Question::all();
        return response()->json($questions);
    }

}
