<?php

namespace Database\Factories;

use App\Models\BloodType;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DonationRequest>
 */
class DonationRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_name' => $this->faker->name(),
            'patient_age' => $this->faker->numberBetween(1, 100),
            'blood_type_id' => BloodType::inRandomOrder()->first()->id,
            'bags_number' => $this->faker->numberBetween(1, 10),
            'hospital_name' => $this->faker->company(),
            'hospital_address' => $this->faker->address(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'details' => $this->faker->sentence(),
            'city_id' => City::inRandomOrder()->first()->id,
            'client_id' => $this->faker->numberBetween(1, 10),
            'patient_phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
