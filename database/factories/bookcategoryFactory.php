<?php

namespace Database\Factories;

use App\Models\book;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bookcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genbookId = book::pluck('id')->toArray();
        $gencategoryId = category::pluck('id')->toArray();
        return [
            'book_id' => $this->faker->randomElement($genbookId),
            'category_id' => $this->faker->randomElement($gencategoryId)
        ];
    }
}
