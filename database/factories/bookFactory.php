<?php

namespace Database\Factories;

use App\Models\publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genpublisherId = publisher::pluck('id')->toArray();
        return [
            'publisher_id' => $this->faker->randomElement($genpublisherId),
            'author' => $this->faker->name(),
            'year' => $this->faker->numberBetween(2000, 2022),
            'synopsis' => $this->faker->text(200).$this->faker->text(50)
        ];
    }
}
