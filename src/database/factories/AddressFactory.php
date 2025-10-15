<?php

namespace Database\Factories;
use App\Models\Address;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Address::class;
    
    public function definition(): array
    {
        return [
            'line'        => $this->faker->streetAddress,
            'line1'       => $this->faker->secondaryAddress,
            'postal_code' => $this->faker->postcode,
            'city_id'     => City::factory(),
        ];
    }
}
