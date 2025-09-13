<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Notification;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function updateProgress(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
        ]);

        $userId = 1; // tempp

        $progress = Progress::updateOrCreate(
            ['user_id' => $userId, 'lesson_id' => $request->lesson_id],
            ['is_completed' => true]
        );

        $lesson = Lesson::findOrFail($request->lesson_id);
        $course = $lesson->course;

        $totalLessons = $course->lessons()->count();
        $completedLessons = Progress::where('user_id', $userId)
            ->whereIn('lesson_id', $course->lessons->pluck('id'))
            ->where('is_completed', true)
            ->count();

        $progressPercentage = round(($completedLessons / $totalLessons) * 100);

        // milestones
        $milestones = [
            50 => 'أحسنت! نصف الطريق',
            75 => 'أنت قريب من النهاية',
            100 => 'تهانينا! أنجزت الكورس بالكامل'
        ];

        foreach ($milestones as $milestone => $title) {
            if ($progressPercentage >= $milestone) {

                $body = match ($milestone) {
                    50 => 'لقد أكملت نصف دروس ' . $course->name,
                    75 => 'لقد أنجزت 75% من  ' . $course->name,
                    100 => 'لقد أنهيت  ' . $course->name . ' بالكامل، أحسنت!',
                };

                $alreadySentMilestone = Notification::where('user_id', $userId)
                    ->where('title', $title)
                    ->where('body', $body)
                    ->exists();

                if (!$alreadySentMilestone) {
                    Notification::create([
                        'user_id' => $userId,
                        'title' => $title,
                        'body' => $body,
                        'read_status' => 'unread',
                    ]);
                }
            }
        }

        $notifications = Notification::where('user_id', $userId)->latest()->get();

        return response()->json([
            'message' => 'تم تحديث التقدم بنجاح',
            'progress' => $progress,
            'course_progress' => $progressPercentage . '%',
            'notifications' => $notifications,
            'total_lessons' => $totalLessons,
            'completed_lessons' => $completedLessons,
            'remaining_lessons' => $totalLessons - $completedLessons,
        ]);
    }
}
