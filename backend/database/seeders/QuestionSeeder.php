<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'lesson_id' =>1,
                'question_body' => 'ما هو حرف الألف؟',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' =>1,
                'question_body' => 'ما هو حرف الباء؟',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 1,
                'question_body' => 'ما هو حرف الألف؟',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 2,
                'question_body' => 'ما هو حرف الباء؟',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}