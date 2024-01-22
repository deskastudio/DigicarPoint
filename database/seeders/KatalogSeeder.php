<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('katalog')->insert([
            'id_katalog'=> '1',
            'gambar' => 'crv.jpg',
            'jenis' => 'Honda CRV',
            'harga' => 'Rp. 350.000.000',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('katalog')->insert([
            'id_katalog'=> '2',
            'gambar' => 'inova.jpg',
            'jenis' => 'Kijang Innova',
            'harga' => 'Rp. 250.000.000',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
