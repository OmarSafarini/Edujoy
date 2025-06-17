<?php

namespace App\Http\Controllers;

use App\Models\VideoHistory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VideoHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request){
        $user = $request->user();
        $data = VideoHistory::where('user_id', $user->id)
            ->with([
                'video' => function ($q) {
                    $q->select('id', 'title');
                }
            ])
            ->order_by('updated_at')
            ->get(['id', 'is_completed', 'video_id', 'video_id'])

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required|exists:videos,id',
        ]);

        $user = $request->user();
        $videoId = $request->video_id;

        $exists = VideoHistory::where('user_id', $user->id)
                    ->where('video_id', $videoId)
                    ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'This video history already exists for this user.'
            ], 400);
        }

        $new_history = VideoHistory::create([
            'user_id' => $user->id,
            'video_id' => $videoId,
        ]);

        return response()->json([
            'success' => true,
            'data' => $new_history,
        ], 201);
    }
}
