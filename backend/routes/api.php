<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoHistoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AuthController;

// public endpoints
Route::post('login',[AuthController::class,'login']);
Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
Route::get('lessons/questions', [QuestionController::class, 'getAllQuestions']);
Route::get('lessons/{lessonId}/questions', [QuestionController::class, 'getByLesson']);

// private endpoints
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/courses/{courseId}/lessons', [CourseController::class, 'addLesson']);
    Route::post('/lessons/{lessonId}/videos', [LessonController::class, 'addVideoToLesson']);
    Route::controller(VideoHistoryController::class)
        ->prefix('video_history')
        ->group(function () {
            Route::get('/', 'index');
            Route::post('/', 'store');
        });
    Route::get('/profile', [AuthController::class,'profile']);
});