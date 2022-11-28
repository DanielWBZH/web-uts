<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoryseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesList = ['Chinese', 'Japanese', 'American', 'Pirated'];
        foreach ($categoriesList as $category) {
            category::factory()->create([
                'name' => $category
            ]);
        }
    }
}
