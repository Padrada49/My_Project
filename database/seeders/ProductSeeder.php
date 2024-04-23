<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'AA',
                'price' => '500.00',
            ],
            [
                'name' => 'BB',
                'price' => '2000.00',
            ],
            [
                'name' => 'CC',
                'price' => '1000.00',
            ],
            [
                'name' => 'DD',
                'price' => '550.00',
            ],
            [
                'name' => 'EE',
                'price' => '1400.00',
            ],

        ]);
    }
}
