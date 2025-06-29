<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SettingFactory extends Factory
{
    public function definition()
    {
        return [
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'working_hours' => '24/7',
        ];
    }

}
