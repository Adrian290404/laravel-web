<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_name' => 'Room ' . $this->faker->unique()->numberBetween(1, 100),
            'bed_type' => $this->faker->randomElement(['single', 'double', 'queen', 'king']),
            'room_floor' => $this->faker->randomElement(['1st', '2nd', '3rd', '4th']),
            'facilities' => implode(', ', $this->faker->words(3)),
            'rate' => $this->faker->numberBetween(50, 500),
            'avaiable' => $this->faker->boolean(90), // 90% de probabilidad de estar disponible
            'image' => $this->faker->imageUrl(640, 480, 'room'),
        ];
    }
}
