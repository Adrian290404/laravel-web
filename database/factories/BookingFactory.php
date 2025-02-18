<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Employee;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $employee = Employee::inRandomOrder()->first() ?? Employee::factory()->create();
        $room     = Room::inRandomOrder()->first() ?? Room::factory()->create();

        $checkIn  = $this->faker->dateTimeBetween('now', '+1 month');
        $checkOut = (clone $checkIn)->modify('+' . $this->faker->numberBetween(1, 10) . ' days');

        return [
            'user_id' => $employee->id,
            'room_id' => $room->id,
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'special_request' => $this->faker->sentence,
            'order_date' => now(),
            'status' => $this->faker->randomElement(['Booked', 'Refund', 'Cancelled', 'Pending']),
        ];
    }
}
