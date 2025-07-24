<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::insert([
            [
                'question_id' => 10,
                'answer_body' => 'كوكو في الغابة',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'answer_body' => 'كوكو في الغابة وفي السباحة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'answer_body' => 'كوكو في الغابة وفي البيت',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'لا شيء من ما ذكر',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'لان ما ذكر',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => ' البصل',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'البطاطا',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
