<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
                'name' => 'A',
                'email' => 'a@email.com',
                'password' => '12345678',
            ],
            [
                'name' => 'B',
                'email' => 'b@email.com',
                'password' => '12345678',
            ],            
            [
                'name' => 'C',
                'email' => 'c@email.com',
                'password' => '12345678',
            ],            
            [
                'name' => 'D',
                'email' => 'd@email.com',
                'password' => '12345678',
            ],
        ]);
    }
}
