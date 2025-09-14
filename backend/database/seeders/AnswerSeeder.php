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
            // درس 1
            // سؤال 1: ما هذا الحرف (أ)
            [
                'question_id' => 1,
                'answer_body' => 'الباء',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'answer_body' => 'الألف',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'answer_body' => 'التاء',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'answer_body' => 'الجيم',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 2: ما الحرف التالي لحرف التاء
            [
                'question_id' => 2,
                'answer_body' => 'الثاء',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer_body' => 'الألف',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer_body' => 'الباء',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer_body' => 'الجيم',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 3: ما الحرف السابق لحرف الواو
            [
                'question_id' => 3,
                'answer_body' => 'الواو',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'answer_body' => 'الياء',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'answer_body' => 'الطاء',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'answer_body' => 'الهاء',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // درس 2
            // سؤال 4: ما هي الحركة الصحيحة في الكلمة: كتاب
            [
                'question_id' => 4,
                'answer_body' => 'كتَاب',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer_body' => 'كُتاب',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer_body' => 'كَتاب',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer_body' => 'كِتاب',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 5: اختر الكلمة التي تحتوي على كسرة في الحرف الثاني
            [
                'question_id' => 5,
                'answer_body' => 'بَكِر',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'answer_body' => 'كِتاب',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'answer_body' => 'قَلَم',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'answer_body' => 'قَمَر',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // درس 3
            // سؤال 6: رتّب الكلمات التالية لتكوّن جملة مفيدة : (في - المدرسة - الطلاب - يدرسون)
            [
                'question_id' => 6,
                'answer_body' => 'الطلاب يدرسون في المدرسة',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'answer_body' => 'يدرسون الطالب في المدرسة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'answer_body' => 'في المدرسة الطلاب يدرسون',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'answer_body' => 'الطلاب في المدرسة يدرس',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 7: رتّب الكلمات التالية لتكوّن جملة مفيدة : (الشمس - تشرق - صباحًا)
            [
                'question_id' => 7,
                'answer_body' => 'صباحًا لا الشمس تشرق',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer_body' => 'تشرق الشمس صباح',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer_body' => 'الشمس تشرق صباحًا',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer_body' => 'شمس صباحًا تشرق',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 8: رتّب الكلمات التالية لتكوّن جملة مفيدة : (في الحديقة - الكرة - أحمد - يلعب)
            [
                'question_id' => 8,
                'answer_body' => 'أحمد يلعب الكرة في الحديقة',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'answer_body' => 'يلعب الكرة أحمد في الحديقة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'answer_body' => 'يلعب الحديقة أحمد في الكرة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'answer_body' => 'الكرة يلعب أحمد في الحديقة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 9: رتّب الكلمات التالية لتكوّن جملة مفيدة : (الطيور - الصباح - في - تزقزق)
            [
                'question_id' => 9,
                'answer_body' => 'تزقزق الصباح الطيور في ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer_body' => 'الصباح في تزقزق الطيور',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer_body' => 'تزقزق الصباح في الطيور',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer_body' => 'الطيور تزقزق في الصباح',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //  'question_body' => 'أكمل الجملة التالية بكلمة مناسبة: ذهبتُ إلى __________ لشراء الخبز.',
            [
                'question_id' => 10,
                'answer_body' => 'المَدرسةِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'answer_body' => 'المَخْبَزِ',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'answer_body' => 'المَكتبةِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'answer_body' => 'المَسْجِدِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // سؤال 11: اختر الجملة الصحيحة إملائيًا من بين الجمل التالية:
            [
                'question_id' => 11,
                'answer_body' => 'ذهبتُ إلى المدرسةِ صباحًا',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'ذهبتُ إلى صباحًا',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'المَدرسة إلى صَباحًا',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 11,
                'answer_body' => 'ذهبتُ إلى صَباحًا المدرَسة',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

              //  'question_body' => 'اختر الجملة الصحيحة إملائيًا من بين الجمل التالية',

            [
                'question_id' => 12,
                'answer_body' => 'قرأتُ الكتابَ في المكتبةِ',
                'is_true' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 12,
                'answer_body' => 'قرأتُ المكتبةِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 12,
                'answer_body' => 'الكتابُ في المكتبةِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 12,
                'answer_body' => 'قرأتُ في الكتابَ المكتبةِ',
                'is_true' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],


    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 13
    [
        'question_id' => 13,
        'answer_body' => 'مثنى',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 13,
        'answer_body' => 'جمع',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 13,
        'answer_body' => 'مفرد',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 13,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 14
    [
        'question_id' => 14,
        'answer_body' => 'جمع',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 14,
        'answer_body' => 'مفرد',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 14,
        'answer_body' => 'مثنى',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 14,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 15
    [
        'question_id' => 15,
        'answer_body' => 'مفرد',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 15,
        'answer_body' => 'مثنى',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 15,
        'answer_body' => 'جمع',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 15,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 16
    [
        'question_id' => 16,
        'answer_body' => 'جمع',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 16,
        'answer_body' => 'مثنى',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 16,
        'answer_body' => 'مفرد',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 16,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 17
    [
        'question_id' => 17,
        'answer_body' => 'مفرد',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 17,
        'answer_body' => 'مثنى',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 17,
        'answer_body' => 'جمع',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 17,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 5: تحديد المفرد والمثنى والجمع - سؤال 18
    [
        'question_id' => 18,
        'answer_body' => 'مثنى',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 18,
        'answer_body' => 'مفرد',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 18,
        'answer_body' => 'جمع',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 18,
        'answer_body' => 'جمع تكسير',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 6: لام شمسية ولام قمرية - سؤال 19: اختر الكلمة التي تبدأ بلام قمرية
    [
        'question_id' => 19,
        'answer_body' => 'السماء',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 19,
        'answer_body' => 'القمر',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 19,
        'answer_body' => 'الكتاب',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 19,
        'answer_body' => 'الشمس',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 6: لام شمسية ولام قمرية - سؤال 20: اختر الكلمة التي تبدأ بلام شمسية
    [
        'question_id' => 20,
        'answer_body' => 'الشمس',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 20,
        'answer_body' => 'القمر',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 20,
        'answer_body' => 'السماء',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 20,
        'answer_body' => 'الكتاب',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // درس 6: لام شمسية ولام قمرية - سؤال 21: اختر الكلمة التي تبدأ بلام قمرية
    [
        'question_id' => 21,
        'answer_body' => 'الكتاب',
        'is_true' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 21,
        'answer_body' => 'الشمس',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 21,
        'answer_body' => 'القمر',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'question_id' => 21,
        'answer_body' => 'السماء',
        'is_true' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],


    ]);
    }
}
