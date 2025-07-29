<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $videos = [
            // الدرس 1: الحروف الأبجدية وأصواتها
            ['lesson_id' => 1, 'title' => 'الحروف الأبجدية وأصواتها', 'video_url' => 'https://www.youtube.com/watch?v=kSlmmLvMqWA&list=PLAvNNkZLQQScuFOY6bfAI25cueqanYU5&pp=0gcJCV8EOCosWNin'],

            // الدرس 2: الحركات (الضم، الفتح، الكسر)
            ['lesson_id' => 2, 'title' => 'حركات الضم والفتح والكسر', 'video_url' => 'https://youtu.be/LyzupN62MGA?si=lrZx5tjPo23u1b9-'],

            // الدرس 3: تكوين جمل مفيدة
            ['lesson_id' => 3, 'title' => 'تكوين جمل مفيدة', 'video_url' => 'https://youtu.be/eRVczhVsNfM?si=hQSuFXDKbUNgoXrk'],

            // الدرس 4: قراءة وكتابة جمل
            ['lesson_id' => 4, 'title' => 'قراءة وكتابة الجمل العربية', 'video_url' => 'https://www.youtube.com/watch?v=EiMf3iwvEkc&list=PLEaGEZnOHpUOmHSHA0e7XEHKQwBHK6cDh'],

            // الدرس 5: المفرد والمثنى والجمع
            ['lesson_id' => 5, 'title' => 'التمييز بين المفرد والمثنى والجمع - الجزء 1', 'video_url' => 'https://youtu.be/fAdCP1qmLR0?si=QilQrCiLNd8yt1S9'],
            ['lesson_id' => 5, 'title' => 'التمييز بين المفرد والمثنى والجمع - الجزء 2', 'video_url' => 'https://youtu.be/QXdwBFOqZAo?si=ER3M6AtDtPtKLY58'],

            // الدرس 6: اللام الشمسية واللام القمرية
            ['lesson_id' => 6, 'title' => 'اللام الشمسية واللام القمرية - الجزء 1', 'video_url' => 'https://youtu.be/T-5PvYGU_OY?si=OVARuqu7sVRJ5Du0'],
            ['lesson_id' => 6, 'title' => 'اللام الشمسية واللام القمرية - الجزء 2', 'video_url' => 'https://youtu.be/chfSXsFL3Wg?si=z8lFqZSJR-nf5uA3'],

            // الدرس 7: همزة الوصل والقطع
            ['lesson_id' => 7, 'title' => 'همزة الوصل والقطع - تدريب 1', 'video_url' => 'https://youtu.be/WLLyn3VWPrM?si=BYd8Wjwcskp9iAbW'],
            ['lesson_id' => 7, 'title' => 'همزة الوصل والقطع - تدريب 2', 'video_url' => 'https://youtu.be/DRUi3iL0zVQ?si=A6yKAYdGRUm4C1qt'],
            ['lesson_id' => 7, 'title' => 'همزة الوصل والقطع - تدريب 3', 'video_url' => 'https://youtu.be/nFehGvhyWnE?si=E0b0kf6aMKwZsMS8'],

            // الدرس 8: أقسام الكلام
            ['lesson_id' => 8, 'title' => 'أقسام الكلام - الجزء 1', 'video_url' => 'https://youtu.be/CvTvx1TRYw4?si=y59VP566uLo7Tni8'],
            ['lesson_id' => 8, 'title' => 'أقسام الكلام - الجزء 2', 'video_url' => 'https://youtu.be/M4gJVbCo0_8?si=aRO0BTgNwQZp1iOc'],

            // الدرس 9: حروف الجر
            ['lesson_id' => 9, 'title' => 'حروف الجر - فيديو 1', 'video_url' => 'https://youtu.be/H_oH6MW09TQ?si=Qtt6k12OJ9k6wcpm'],
            ['lesson_id' => 9, 'title' => 'حروف الجر - فيديو 2', 'video_url' => 'https://youtu.be/hrJxhgUwBl8?si=EI7WvOmjifCV3l91'],
            ['lesson_id' => 9, 'title' => 'حروف الجر - فيديو 3', 'video_url' => 'https://youtu.be/eZjOzOIgmPo?si=MkGascdobmdaq5pw'],
            ['lesson_id' => 9, 'title' => 'حروف الجر - فيديو 4', 'video_url' => 'https://youtu.be/PToCSHB64cc?si=bfi8lJFKnmVaXa6j'],

            ['lesson_id' => 10, 'title' => 'التمييز بين الجملة والتركيب + تصريف الأفعال', 'video_url' => 'https://youtu.be/WLLyn3VWPrM?si=BYd8Wjwcskp9iAbW'],

            //english
            ['lesson_id' => 11, 'title' => 'الحروف A-Z - فيديو 1', 'video_url' => 'https://youtu.be/5PKXLilDGuE?si=FKUVW3xUxTmNY8TW'],
            ['lesson_id' => 11, 'title' => 'الحروف A-Z - فيديو 2', 'video_url' => 'https://youtu.be/U2yznF7grks?si=z_Q2fwUC0EQpBfQp'],

            // المستوى الثاني: الأرقام والألوان
            ['lesson_id' => 12, 'title' => 'الأرقام والألوان - فيديو 1', 'video_url' => 'https://youtu.be/6QJ0NWz512g?si=BGM0AHwqq5pzUFK0'],
            ['lesson_id' => 12, 'title' => 'الأرقام والألوان - فيديو 2', 'video_url' => 'https://youtu.be/FA_Nbh-BQ1o?si=4lI9UfMbwlXA7P0h'],

            // المستوى الثالث: أيام الأسبوع
            ['lesson_id' => 13, 'title' => 'أيام الأسبوع', 'video_url' => 'https://youtu.be/uHZzJ8_fXYo?si=V1zhQovNQ2XVXR-s'],

            // المستوى الرابع: وسائل النقل
            ['lesson_id' => 14, 'title' => 'وسائل النقل', 'video_url' => 'https://youtu.be/Cn9SvcTmWNQ?si=AmCsaCKRcKvmlylu'],

            // المستوى الخامس: الحيوانات والفواكه
            ['lesson_id' => 15, 'title' => 'الحيوانات والفواكه - فيديو 1', 'video_url' => 'https://youtu.be/til4_5qTCB0?si=3vfJtxkQPkZuWFZC'],
            ['lesson_id' => 15, 'title' => 'الحيوانات والفواكه - فيديو 2', 'video_url' => 'https://youtu.be/uptPx4PvvMw?si=U9cth4uBjd-ew4R9'],
            ['lesson_id' => 15, 'title' => 'الحيوانات والفواكه - فيديو 3', 'video_url' => 'https://youtu.be/26JgqPbD9rY?si=AAbIDqBtneNy6uvY'],

            // المستوى السادس: أعضاء جسم الإنسان
            ['lesson_id' => 16, 'title' => 'أعضاء جسم الإنسان', 'video_url' => 'https://youtu.be/lHtPXHCerfA?si=1nVsb1TiTvmHsaQ8'],

            // المستوى السابع: المهن
            ['lesson_id' => 17, 'title' => 'تعلم المهن وأسماؤها', 'video_url' => 'https://youtu.be/bcBOBz9X7yM?si=ZW8zs-4WkvyykrZO'],

            // المستوى الثامن: الأضداد
            ['lesson_id' => 18, 'title' => 'تعلم الأضداد', 'video_url' => 'https://youtu.be/LrMg8_LgG1A?si=ZqNerc5G3sZ0l3m4'],

            // المستوى التاسع: كتابة الحروف الإنجليزية
            ['lesson_id' => 19, 'title' => 'كتابة الحروف الإنجليزية', 'video_url' => 'https://www.youtube.com/watch?v=_IPPBLH_btA&list=PLRjOL6Pz6fIGV7draI37tfNVIuYqrd2ms'],

            // المستوى العاشر: أقسام الكلام
            ['lesson_id' => 20, 'title' => 'أقسام الكلام - فيديو 1', 'video_url' => 'https://www.youtube.com/watch?v=aJ3NR77TvOU&list=PL94O5Z3W414GoS9w9Raqa2I_nmv55Sjwi'],
            ['lesson_id' => 20, 'title' => 'أقسام الكلام - فيديو 2', 'video_url' => 'https://youtu.be/1jli7xAzBUo?si=PtzJXN3HU6adN8Nt'],
            ['lesson_id' => 20, 'title' => 'أقسام الكلام - فيديو 3', 'video_url' => 'https://youtu.be/-D9vZJv7EPI?si=8JUPATu9PRrM48Px'],
            ['lesson_id' => 20, 'title' => 'أقسام الكلام - فيديو 4', 'video_url' => 'https://youtu.be/ORmntrEHKY8?si=JntEzCHHmeGGW1Vo'],

            //math
            // المستوى الأول: الأعداد من 1 إلى 10
            ['lesson_id' => 21, 'title' => 'الأعداد من 1 إلى 10 - فيديو 1', 'video_url' => 'https://youtu.be/WZVImbvntMc?si=bqdN48AZt-vGPQwy'],
            ['lesson_id' => 21, 'title' => 'الأعداد من 1 إلى 10 - فيديو 2', 'video_url' => 'https://youtu.be/2xgyEC9WCA4?si=_0iDlaBQw8TabnL8'],
            ['lesson_id' => 21, 'title' => 'الأعداد من 1 إلى 10 - فيديو 3', 'video_url' => 'https://youtu.be/2uNVc8Q_O64?si=m25hBc3MT1Tq0qg6'],

            // المستوى الثاني: الجمع والطرح بين الأعداد
            ['lesson_id' => 22, 'title' => 'الجمع والطرح - فيديو 1', 'video_url' => 'https://youtu.be/IhkRM33kb7E?si=Y1NuCow_gIiaYWo9'],
            ['lesson_id' => 22, 'title' => 'الجمع والطرح - فيديو 2', 'video_url' => 'https://youtu.be/IhkRM33kb7E?si=LLp_AzLUvLoFAu4t'],
            ['lesson_id' => 22, 'title' => 'الجمع والطرح - فيديو 3', 'video_url' => 'https://youtu.be/IhkRM33kb7E?si=rei1zJIllHK5yrXS'],

            // المستوى الثالث: الأعداد من 1 إلى 100
            ['lesson_id' => 23, 'title' => 'الأعداد من 1 إلى 100 - فيديو 1', 'video_url' => 'https://youtu.be/-o5O_VLYvwU?si=lJqRJAmOoRIys-Er'],
            ['lesson_id' => 23, 'title' => 'الأعداد من 1 إلى 100 - فيديو 2', 'video_url' => 'https://youtu.be/fFeaNeq7uy0?si=dVa9V5l0ClvkPMu4'],

            // المستوى الرابع: الجمع والطرح باستخدام خط الأعداد
            ['lesson_id' => 24, 'title' => 'خط الأعداد - فيديو 1', 'video_url' => 'https://youtu.be/JisyjKGj9Cg?si=ptFVblWDYUk-vZGc'],
            ['lesson_id' => 24, 'title' => 'خط الأعداد - فيديو 2', 'video_url' => 'https://youtu.be/kAZkdG08EPU?si=GT4obDdjM6syU_dR'],

            // المستوى الخامس: الجمع العمودي
            ['lesson_id' => 25, 'title' => 'الجمع العمودي - فيديو 1', 'video_url' => 'https://youtu.be/diRgw6ydViU?si=Yw-iM57axM075cLm'],
            ['lesson_id' => 25, 'title' => 'الجمع العمودي - فيديو 2', 'video_url' => 'https://youtu.be/EGUqPPu57cw?si=njjq96YxQyfSwdoz'],

            // المستوى السادس: جدول الضرب
            ['lesson_id' => 26, 'title' => 'جدول الضرب', 'video_url' => 'https://www.youtube.com/watch?v=aT_SXpWHV84&list=PLEaGEZnOHpUPgAhXALGsese'],

            // المستوى السابع: القسمة البسيطة
            ['lesson_id' => 27, 'title' => 'القسمة البسيطة', 'video_url' => 'https://youtu.be/TkroAwtL9hY?si=Hz3t_DB4nDVasvJK'],

            // المستوى الثامن: الكسور
            ['lesson_id' => 28, 'title' => 'الكسور - فيديو 1', 'video_url' => 'https://youtu.be/7VDRgtftVmU?si=2ARWkKJLzWINuYj1'],
            ['lesson_id' => 28, 'title' => 'الكسور - فيديو 2', 'video_url' => 'https://youtu.be/vd9DDPfes7U?si=7KvIDsjaitF0D0Hs'],
            ['lesson_id' => 28, 'title' => 'الكسور - فيديو 3', 'video_url' => 'https://youtu.be/0kUrvN8ObvM?si=xt3yk7cwNK8AHKm0'],

            // المستوى التاسع: الأعداد العشرية
            ['lesson_id' => 29, 'title' => 'الأعداد العشرية', 'video_url' => 'https://youtu.be/wrdI_M_QpCk?si=00QivKnvBNo8Q6wY'],

            // المستوى العاشر: المساحة والمحيط والأشكال الهندسية
            ['lesson_id' => 30, 'title' => 'المساحة والأشكال - فيديو 1', 'video_url' => 'https://youtu.be/RXs_lCpaACg?si=trnlgAn3adrF8PHF'],
            ['lesson_id' => 30, 'title' => 'المساحة والأشكال - فيديو 2', 'video_url' => 'https://youtu.be/yB6-C6sHSeA?si=YrppynB0dOsEAMZD'],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
