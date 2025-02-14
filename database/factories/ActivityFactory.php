<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory()->create()->id,
            'datetime' => fake()->dateTimeBetween('-1 year', '+1 year'),
            'paid' => fake()->boolean(),
            'notes' => fake()->sentence(),
            'satisfaction' => fake()->numberBetween(0, 10),
        ];
    }
}