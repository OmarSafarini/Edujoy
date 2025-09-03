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
                'question_body' => 'ما هذا الحرف (أ)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' =>1,
                'question_body' => 'ما الحرف التالي لحرف التاء',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 1,
                'question_body' => 'ما الحرف السابق لحرف الواو',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //2
            [
                'lesson_id' =>2,
                'question_body' => 'ما هي الحركة الصحيحة في الكلمة: كتاب',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' =>2,
                'question_body' => 'اختر الكلمة التي تحتوي على كسرة في الحرف الثاني',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //3
            [
                'lesson_id' => 3,
                'question_body' => 'رتّب الكلمات التالية لتكوّن جملة مفيدة : (في - المدرسة - الطلاب - يدرسون)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 3,
                'question_body' => 'رتّب الكلمات التالية لتكوّن جملة مفيدة :  (الشمس - تشرق - صباحًا)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 3,
                'question_body' => 'رتّب الكلمات التالية لتكوّن جملة مفيدة :  (في الحديقة - الكرة - أحمد - يلعب)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 3,
                'question_body' => 'رتّب الكلمات التالية لتكوّن جملة مفيدة :  (الطيور - الصباح - في - تزقزق)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //4
            [
                'lesson_id' => 4,
                'question_body' => 'أكمل الجملة التالية بكلمة مناسبة: ذهبتُ إلى __________ لشراء الخبز.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 4,
                'question_body' => 'اختر الجملة الصحيحة إملائيًا من بين الجمل التالية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 4,
                'question_body' => 'اختر الجملة الصحيحة إملائيًا من بين الجمل التالية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //5
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة ولدان مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة معلمون مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة سائق مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة خضراوات مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة فاكهة مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 5,
                'question_body' => 'حدد ما اذا كانت الكلمة سيارتان مفرد ام مثنى ام جمع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //6
            [
                'lesson_id' => 6,
                'question_body' => 'اختر الكلمة التي تحتوي على لام شمسية: السماء - القمر - الكتاب',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 6,
                'question_body' => 'اختر الكلمة التي تحتوي على لام قمرية: الباب - الشمس - السيارة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 6,
                'question_body' => 'حدد نوع اللام في كلمة "النور" (شمسية أو قمرية)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 6,
                'question_body' => 'حدد نوع اللام في كلمة "الطبيب" (شمسية أو قمرية)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //7
            [
                'lesson_id' => 7,
                'question_body' => 'اختر الكلمة التي تبدأ بهمزة وصل: ابن - أحمد - أمين',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 7,
                'question_body' => 'اختر الكلمة التي تبدأ بهمزة قطع: أحمد - ابن - استيقظ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 7,
                'question_body' => 'حدد نوع الهمزة في كلمة "اسم" (وصل أو قطع)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 7,
                'question_body' => 'حدد نوع الهمزة في كلمة "أمل" (وصل أو قطع)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //8
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة احمد من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة ذهب من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة في من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة ثلاجة من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة لعبو من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة طيارة من اقسام الكلام',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 9,
                'question_body' => 'اختر حرف الجر من بين االحرف التالية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 9,
                'question_body' => 'اختر حرف الجر في الجملة: ذهب أحمد إلى المدرسة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 9,
                'question_body' => 'اختر حرف الجر في الجملة: الكتاب على الطاولة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 9,
                'question_body' => 'حدد حرف الجر في الجملة: جلست تحت الشجرة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //10
            [
                'lesson_id' => 10,
                'question_body' => 'هل "ذهب أحمد" جملة أم تركيب',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 10,
                'question_body' => 'هل "في البيت" جملة أم تركيب',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 10,
                'question_body' => 'اختر الفعل في الجملة: كتب الولد الدرس',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ///////fgrgregr
            //11
             [
                'lesson_id' => 11,
                'question_body' => 'F ما الحرف التالي ل',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 11,
                'question_body' => 'X ما اسم الحرف التالي ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 11,
                'question_body' => 'T ما الحرف يسبق حرف',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //12
            [
                'lesson_id' => 12,
                'question_body' => 'ما اسم اللون االصفر بالانجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 12,
                'question_body' => 'ما اسم الرقم 4 بالانجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 12,
                'question_body' => 'ما الرقم الذي يسبق الرقم 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //13
            [
                'lesson_id' => 13,
                'question_body' => 'اذكر ايام االسبوع باللغة الانجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 13,
                'question_body' => 'ما اليوم التالي ليوم الخميس باالنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //14
            [
                'lesson_id' => 14,
                'question_body' => 'ما اسم السيارة باللغة الانجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 14,
                'question_body' => 'ما اسم الطائرة باللغة الانجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 14,
                'question_body' => 'ما اسم السفينة باللغة الانجليزية',
                'created_at' => now(),
                'updated_at' => now(),  
            ],
            //15
            [
                'lesson_id' => 15,
                'question_body' => 'ما اسم االسد باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 15,
                'question_body' => 'ما اسم التفاح باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //16
            [
                'lesson_id' => 16,
                'question_body' => 'ما اسم اليد باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 16,
                'question_body' => 'ما اسم الانف باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 16,
                'question_body' => 'ما اسم الاذن باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),  
            ],
            [
                'lesson_id' => 16,
                'question_body' => 'ما اسم الفم باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //17
            [
                'lesson_id' => 17,
                'question_body' => 'ما اسم الطبيب باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 17,
                'question_body' => 'ما اسم المعلم باللغة االنجليزية',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //18
            [
                'lesson_id' => 18,
                'question_body' => 'angry ما هو عكس كلمة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 18,
                'question_body' => 'in front ما هو عكس كلمة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 18,
                'question_body' => 'near ما هو عكس كلمة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 18,
                'question_body' => 'full ما هو عكس كلمة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 19 لا يوجد
            // 20
            [
                'lesson_id' => 8,
                'question_body' => 'حدد نوع الكلمة "apple" (noun، verb، adjective)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 20,
                'question_body' => 'حدد نوع الكلمة "run" (noun، verb، adjective)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 20,
                'question_body' => 'حدد نوع الكلمة "beautiful" (noun، verb، adjective)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 20,
                'question_body' => 'حدد نوع الكلمة "teacher" (noun، verb، adjective)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 20,
                'question_body' => 'حدد نوع الكلمة "write" (noun، verb، adjective)',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            ///////kokokookokokookokoo
            [
                'lesson_id' => 21,
                'question_body' => 'ما اسم هذا الرقم 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 21,
                'question_body' => 'ما الرقم الذي يلي الرقم 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 21,
                'question_body' => 'ما الرقم الذي يسبق الرقم 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 22,
                'question_body' => '3+4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 22,
                'question_body' => '2+6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 22,
                'question_body' => '3-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 22,
                'question_body' => '6-6',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 23,
                'question_body' => 'ما اسم هذا الرقم 69',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 23,
                'question_body' => 'ما الرقم الذي يلي الرقم 40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 23,
                'question_body' => 'ما الرقم الذي يسبق الرقم 97',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 24,
                'question_body' => '3+2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 24,
                'question_body' => '5+5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 24,
                'question_body' => '1+6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 24,
                'question_body' => '4-9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 24,
                'question_body' => '9-6',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 25,
                'question_body' => '13+12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 25,
                'question_body' => '300+531',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 25,
                'question_body' => '392+200',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 26,
                'question_body' => '4*5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 26,
                'question_body' => 'ما العدد الذي اذا ضربته في 3 يعطيك الناتج 15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 26,
                'question_body' => '9*7',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'lesson_id' => 27,
                'question_body' => '16/4',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'lesson_id' => 28,
                'question_body' => '1\3 + 1\4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 28,
                'question_body' => 'من اكبر 2\1 ام 3\1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'lesson_id' => 29,
                'question_body' => 'إذا كان الرقم 7 في منزلة الأحاد، فكيف نكتب العدد',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 29,
                'question_body' => 'اقرأ العدد التالي قراءة صحيحة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lesson_id' => 29,
                'question_body' => 'إذا كان الرقم 7 في منزلة جزء من المئة، فكيف نكتب العدد',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'lesson_id' => 30,
                'question_body' => 'ما هي مساحة المستطيل , المربع , الدائرة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}