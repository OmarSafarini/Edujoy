<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProgressController;use App\Http\Controllers\VoiceController;

Route::post('/tts', [VoiceController::class, 'speak']);


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

Route::controller(NotificationController::class)
    ->prefix('notifications')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::delete('/{id}', 'destroy');
        Route::put('/{id}/read', 'markAsRead');
        Route::put('/allRead', 'markAllAsRead');
    });
//middleware('auth:sanctum')

    Route::post('/progress/update', [ProgressController::class, 'updateProgress']);


Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
Route::get('/courses', [CourseController::class, 'getAllCourses']);
Route::get('lesson/{lessonId}/questions', [QuestionController::class, 'getByLesson']);
Route::get('lesson/questions', [QuestionController::class, 'getAllQuestions']);
Route::post('/courses/{courseId}', [CourseController::class, 'addLesson']);
Route::post('/lesson/{lessonId}', [LessonController::class, 'addVideoToLesson']);
Route::post('/lesson/{lessonId}/questions', [QuestionController::class, 'addQuestions']);
Route::post('/courses/{courseId}/lessons', [CourseController::class, 'addLesson']);

