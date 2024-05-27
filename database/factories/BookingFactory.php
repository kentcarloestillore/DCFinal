<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          =>fake()->name(),
            'trip_id'       =>fake()->numberBetween(1,4),
            'description'   =>fake()->sentence(),
            'date'          =>fake()->date(),
            'weight'        =>fake()->numberBetween(100,10000),
            'price'         =>fake()->numberBetween(1000,500000)
        ];
    }
}
