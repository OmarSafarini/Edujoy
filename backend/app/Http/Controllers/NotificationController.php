<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // عرض كل الإشعارات
    public function index(Request $request)
    {
        $notifications = Notification::with('user')->latest()->get();
        return response()->json($notifications);
    }

    // إضافة إشعار جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $notification = Notification::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'user_id' => $validated['user_id'],
            'read_status' => 'unread',
        ]);

        return response()->json([
            'message' => 'Notification created successfully.',
            'data' => $notification
        ], 201);
    }

    // حذف إشعار
    public function destroy($id)
    {
        $notification = Notification::find($id);

        if (!$notification) {
            return response()->json(['message' => 'Notification not found.'], 404);
        }

        $notification->delete();

        return response()->json(['message' => 'Notification deleted successfully.']);
    }
    public function markAsRead($id)
{
        $notification = Notification::findOrFail($id);
        $notification->read_status = 'read';
        $notification->save();

        return response()->json(['message' => 'Notification marked as read.']);
}
public function markAllAsRead()
    {
        Notification::where('read_status', 'unread')->update(['read_status' => 'read']);

        return response()->json(['message' => 'All notifications marked as read.']);
    }
}
