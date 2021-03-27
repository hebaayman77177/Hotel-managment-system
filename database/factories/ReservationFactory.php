<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_approved' => $this->faker->boolean,
            'paid_price' => $this->faker->randomDigit,
            'accompany_number' => $this->faker->randomDigit,
            'client_id' => Client::all()->random()->id

        ];
    }
}
