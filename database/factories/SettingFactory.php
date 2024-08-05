<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'about_app' => $this->faker->text,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'fb_link' => $this->faker->url,
            'tw_link' => $this->faker->url,
            'insta_link' => $this->faker->url,
            'notification_setting_text' => $this->faker->text,
            'about_us_text' => $this->faker->text,
        ];
    }
}
