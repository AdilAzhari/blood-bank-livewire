<?php

namespace Database\Factories;

use App\Models\BloodType;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'd_o_b' => $this->faker->date(),
            'last_donation_date' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'password' => bcrypt('12345678'),
            'blood_type_id' => BloodType::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'is_active' => $this->faker->randomElement([0, 1]),
            'api_token' => str()->random(60),
        ];
    }
}
