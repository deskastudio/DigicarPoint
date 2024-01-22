<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            'id_blog'=> '1',
            'thumbnail' => 'crv.jpg',
            'judul' => 'Jelajahi wilayah PIK Avenue dengan mobil cumi darat',
            'deskripsi' => 'Loremipsum wkwkwk',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
