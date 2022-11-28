<?php

namespace Database\Seeders;

use App\Models\bookcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookcategoryseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bookcategory::factory(12)->create();
    }
}
