<?php

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoHistoryController;

=======
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
>>>>>>> 62add846873a51322871ba1193ff21b1405c686f

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD
Route::controller(VideoHistoryController::class)
    ->prefix('video_history')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
=======

Route::get('/courses/{courseId}', [CourseController::class, 'getVideosForCourse']);
>>>>>>> 62add846873a51322871ba1193ff21b1405c686f
