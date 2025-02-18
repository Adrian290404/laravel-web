<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $employee = Employee::inRandomOrder()->first() ?? Employee::factory()->create();

        return [
            'user_id' => $employee->id,
            'date'    => now(),
            'rating'  => $this->faker->numberBetween(1, 5),
            'review'  => $this->faker->sentence,
            'action'  => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
