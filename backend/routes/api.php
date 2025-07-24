<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
Route::get('lesson/{lessonId}/questions', [QuestionController::class, 'getByLesson']);
Route::get('lesson/questions', [QuestionController::class, 'getAllQuestions']);