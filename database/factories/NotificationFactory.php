<?php

namespace Database\Factories;

use App\Models\DonationRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'donation_request_id' => DonationRequest::inRandomOrder()->first()->id,
        ];
    }
}
