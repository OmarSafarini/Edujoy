<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
         Course::factory()
            ->count(5) // أنشئ 5 كورسات
            ->hasLessons(3, [  // ولكل كورس 3 دروس
                'name' => fake()->sentence(4)
            ])
            ->create()
            ->each(function ($course) {
                foreach ($course->lessons as $lesson) {
                    $lesson->videos()->createMany(
                        \App\Models\Video::factory()->count(2)->make()->toArray()
                    );
                }
            });
    }
}

