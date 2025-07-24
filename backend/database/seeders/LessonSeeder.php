<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        // نفترض إن الكورس الأول هو "دورة اللغة العربية" و ID = 1
        Lesson::create([
            'course_id' => 1,
            'name' => 'الدرس الأول: الحروف'
        ]);

        Lesson::create([
            'course_id' => 1,
            'name' => 'الدرس الثاني: الكلمات'
        ]);

        // لكورس ثاني مثلاً ID = 2
        Lesson::create([
            'course_id' => 2,
            'name' => 'الدرس الأول: الجمع'
        ]);
    }
}