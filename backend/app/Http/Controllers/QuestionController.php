<?php

namespace App\Http\Controllers;
use App\Models\Question;   
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\Answer;


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

    public function addQuestions(Request $request, $lessonId)
    {
        $question = Question::create([
            'lesson_id' => $lessonId,
            'question_body' => $request->questionBody,
        ]);

        // إضافة الإجابات المرتبطة
        foreach ($request->answers as $answer) {
            Answer::create([
                'question_id' => $question->id,
                'answer_body' => $answer['text'],
                'is_true' => $answer['isCorrect'],
            ]);
        }

        return response()->json(['message' => 'تمت الإضافة بنجاح']);
    }


}
