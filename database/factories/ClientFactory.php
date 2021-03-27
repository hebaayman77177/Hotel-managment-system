<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

<<<<<<< HEAD

=======
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->safeEmail,
            'gender'            => $this->faker->randomElement(['Male', 'Female']),
<<<<<<< HEAD

=======
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
            'mobile'            => $this->faker->phoneNumber,
            'country'           => $this->faker->country,
            'password'          => $this->faker->numerify('###-###-####'),
            'is_approved'       => $this->faker->boolean(),
            'updated_at'        => $this->faker->date($format = 'Y-m-d', $max = 'now'),
<<<<<<< HEAD
            'deleted_at'        => null,
            'created_at'        => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id'                => $this->faker->unique(false, 1500)->numberBetween(1, 1000),
            'avatar_img'        => $this->faker->image('public/storage', 400, 300, 'Client')

=======
            'deleted_at'        => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'created_at'        => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id'                => $this->faker->unique(false, 1500)->numberBetween(1, 1000),
            'avatar_img'        => $this->faker->image('public/storage', 400, 300, 'Client')
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
        ];
    }
}
