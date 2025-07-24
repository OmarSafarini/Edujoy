<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
Route::post('/courses/{courseId}', [CourseController::class, 'addLesson']);
Route::post('/lesson/{lessonId}', [LessonController::class, 'addVideoToLesson']);