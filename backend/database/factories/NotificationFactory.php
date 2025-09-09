<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notification;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'read_status' => $this->faker->randomElement(['read', 'unread']),
            'user_id' => \App\Models\User::factory(), // يفترض أنك عندك Factory للمستخدم
        ];
    }
}
