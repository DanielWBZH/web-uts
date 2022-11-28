<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publisherseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('publishers')->insert([
        //     'name' => 'Gramedia',
        //     'address' => 'Check Google',
        //     'phone' => '0211234567',
        //     'email' => 'gramedia@gmail.com',
        //     'image' => '/image/gramed.jpg.'
        // ]);

        publisher::factory()->create([
            'name' => 'Gramedia',
            'address' => 'Jl. Puri Agung No.1, RT.1/RW.2, South Kembangan, Kembangan, West Jakarta City, Jakarta 11610',
            'phone' => '0211234567',
            'email' => 'gramedia@gmail.com',
            'image' => '/image/gramed.jpg'
        ]);

        publisher::factory()->create([
            'name' => 'Gramedia2',
            'address' => 'Mal Ciputra Jakarta, Jl. Letjen S. Parman No.09, RT.11/RW.1, Grogol, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470',
            'phone' => '0211234568',
            'email' => 'gramedia2@gmail.com',
            'image' => '/image/gramed.jpg'
        ]);

        publisher::factory()->create([
            'name' => 'Gramedia3',
            'address' => 'Jl. Puri Indah Raya Blok U1 RT.3, RT.3/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610
            ',
            'phone' => '0211234569',
            'email' => 'gramedia3@gmail.com',
            'image' => '/image/gramed.jpg'
        ]);

        publisher::factory()->create([
            'name' => 'Pirate Bay',
            'address' => 'Somewhere In The Sea Stealing Some Content',
            'phone' => '0219876543',
            'email' => 'ElPirato@yohoho.com',
            'image' => '/image/fake.jpg'
        ]);
    }
}
