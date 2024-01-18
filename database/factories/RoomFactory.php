<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomType = RoomType::all();
        //floor of the Hotel
        $floorNumber = $this->faker->numberBetween(1, 50);
        return [
            'room_number' => ($floorNumber * 100) + $this->faker->numberBetween(1, 50),
            'room_name' => $this->faker->randomElement(['DELUXE ROOM', 'PREMIER ROOM', 'ORCHID SUITE', 'PAIZA CLUB ROOM', 'PAIZA PREMIER SUITE', 'SANDS PREMIER SUITE', 'SANDS FAMILY SUITE']),
            'status' => $this->faker->randomElement(['Vacant', 'Occupied']),
            'room_type_id' => $roomType->random()->room_type_id,
        ];
    }
}
