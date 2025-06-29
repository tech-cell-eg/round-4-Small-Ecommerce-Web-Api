<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfficeLocation>
 */
class LocationFactory extends Factory
{

    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'direction_link' => $this->faker->url,
        ];
    }
}
