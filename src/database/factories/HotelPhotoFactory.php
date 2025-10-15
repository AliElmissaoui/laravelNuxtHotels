<?php

namespace Database\Factories;
use App\Models\HotelPhoto;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelPhoto>
 */
class HotelPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   protected $model = HotelPhoto::class;

    public function definition()
    {
        // dummy image path — replace with your storage logic if needed
        $fileName = $this->faker->lexify('hotel_image_????') . '.jpg';
        $path = 'hotels/' . $this->faker->numberBetween(1, 100) . '/' . $fileName;

        return [
            // if you want to rely on HotelFactory to set hotel_id, you can leave this to be filled later
            'hotel_id' => Hotel::factory(),
            'path' => $path,
            'is_main' => false,
        ];
    }
}
