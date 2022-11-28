<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('books')->insert([
        //     'title' => 'Trick Dagang Orang Tionghoa',
        //     'image' => '/image/buku1.jpg'
        // ]);

        // DB::table('books')->insert([
        //     'title' => 'Life Sucks Get Used To It',
        //     'image' => '/image/sucks.jpg'
        // ]);
        book::factory()->create([
            'title' => 'Trik Dagang Orang Tionghoa',
            'image' => '/image/buku1.jpg'
        ]);

        book::factory()->create([
            'title' => 'Life Sucks Get Used To It',
            'image' => '/image/sucks.jpg'
        ]);

        book::factory()->create([
            'title' => 'My Book Cover',
            'image' => '/image/buku2.jpg'
        ]);

        book::factory()->create([
            'title' => 'The Beauty Within',
            'image' => '/image/buku3.jpg'
        ]);

        book::factory()->create([
            'title' => 'Lunar Storm',
            'image' => '/image/buku4.jpeg'
        ]);

        book::factory()->create([
            'title' => 'The Choice',
            'image' => '/image/buku6.jpg'
        ]);

        book::factory()->create([
            'title' => 'Mein Kampf',
            'image' => '/image/buku5.jpg'
        ]);

        book::factory()->create([
            'title' => 'Zhuge Liang',
            'image' => '/image/buku7.jpg'
        ]);

        book::factory()->create([
            'title' => 'Why We Cant Sleep',
            'image' => '/image/buku8.jpg'
        ]);
    }
}
