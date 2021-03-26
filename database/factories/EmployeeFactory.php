<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->safeEmail,
            'password'          => $this->faker->numerify('###-###-####'),
            'is_banned'       => $this->faker->boolean(),
            'avatar_img'        => $this->faker->image('public/storage', 400, 300, 'Client'),
            'national_id'    => $this->faker->sentence(14),
        ];
    }
}
