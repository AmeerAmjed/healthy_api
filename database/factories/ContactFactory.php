<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'profile_id' =>   $this->faker->unique(true)->numberBetween(1, 5),
            'profile_user_id' =>   $this->faker->unique(true)->numberBetween(1, 5),

            'phone_number' => $this->faker->e164PhoneNumber(),
            'phone_number_verified' => $this->faker->randomElement([false, true]),
        ];
    }
}
