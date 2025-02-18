<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(640, 480, 'people'),
            'join_date' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'job_desk' => $this->faker->jobTitle,
            'schedule' => $this->faker->randomElement(['9-5', '8-4', 'turno nocturno']),
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
