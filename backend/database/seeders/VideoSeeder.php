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
            ['lesson_id' => 2, 'title' => 'حركات الضم والفتح والكسر', 'video_url' => 'https://www.youtube.com/watch?v=LyzupN62MGA'],

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

            // الدرس 10: الأفعال (الماضي، المضارع، الأمر) + الفرق بين الجملة والتركيب
            ['lesson_id' => 10, 'title' => 'التمييز بين الجملة والتركيب + تصريف الأفعال', 'video_url' => 'https://youtu.be/WLLyn3VWPrM?si=BYd8Wjwcskp9iAbW'],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
