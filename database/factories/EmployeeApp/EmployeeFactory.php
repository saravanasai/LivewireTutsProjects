<?php

namespace Database\Factories\EmployeeApp;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->userName(),
            "phone" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
        ];
    }
}
