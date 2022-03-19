<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numerify('C-####'),
            'date' => $this->faker->dateTime(),
            'customer' => $this->faker->name(),
            'city' => $this->faker->city(),  
        ];
    }
}
