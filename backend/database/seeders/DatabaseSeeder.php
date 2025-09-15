<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Database\Seeders\UserSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\LessonSeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\AnswerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         $this->call([
        CourseSeeder::class,
        LessonSeeder::class,
        VideoSeeder::class,
        QuestionSeeder::class,
        AnswerSeeder::class
    ]);
    }
}
