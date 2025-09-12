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
            ->orderBy('updated_at', 'desc')
            ->get(['id', 'is_completed', 'video_id', 'video_id']);

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required|exists:videos,id',
            'is_completed' => 'sometimes|boolean',
        ]);

        $user = $request->user();
        $videoId = $request->video_id;
        $isCompleted = $request->input('is_completed', false);

        $history = VideoHistory::updateOrCreate(
            [
                'user_id' => $user->id,
                'video_id' => $videoId,
            ],
            [
                'is_completed' => $isCompleted,
                'updated_at'   => now(),
            ]
        );

        return response()->json([
            'success' => true,
            'data' => $history,
            'message' => $history->wasRecentlyCreated
                ? 'New video history created.'
                : 'Video history updated.',
        ], $history->wasRecentlyCreated ? 201 : 200);
    }

}
