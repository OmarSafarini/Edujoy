<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoHistoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(VideoHistoryController::class)
    ->prefix('video_history')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });


Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
Route::get('lesson/{lessonId}/questions', [QuestionController::class, 'getByLesson']);
Route::get('lesson/questions', [QuestionController::class, 'getAllQuestions']);
Route::post('/courses/{courseId}', [CourseController::class, 'addLesson']);
Route::post('/lesson/{lessonId}', [LessonController::class, 'addVideoToLesson']);
