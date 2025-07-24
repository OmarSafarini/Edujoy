<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class LessonController extends Controller
{


    function addVideoToLesson(Request $request, $lessonId)
    {
        $request->validate([
            'title' => 'required|string',
            'video_url' => 'required|string',
        ]);

        $video = Video::create([
            'lesson_id' => $lessonId,
            'title' => $request->title,
            'video_url' => $request->video_url,
        ]);

        return response()->json(['message' => 'Video added successfully', 'data' => $video], 201);
    }
}
