<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Human>
 */
class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstname(),
            'surname' => $this->faker->lastname(),
            'phone' => $this->faker->phonenumber(),
            'street' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
        ];
    }
}
