<?php

namespace Database\Factories;
use App\Models\Hotel;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Hotel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company . ' Hotel',
            'description' => $this->faker->optional()->paragraphs(2, true),
            // Assumes you have an AddressFactory; Laravel supports assigning factories to foreign keys
            'address_id' => Address::factory(),
            'stars' => $this->faker->numberBetween(0, 5),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Hotel $hotel) {
            // create between 1 and 5 photos for each hotel
            $count = $this->faker->numberBetween(1, 5);
            // ensure exactly one main photo
            \App\Models\HotelPhoto::factory()->count($count)->create([
                'hotel_id' => $hotel->id,
            ])->each(function ($photo, $index) use ($count) {
                // mark the first photo as main (or random if you prefer)
                if ($index === 0) {
                    $photo->update(['is_main' => true]);
                }
            });
        });
    }
}
