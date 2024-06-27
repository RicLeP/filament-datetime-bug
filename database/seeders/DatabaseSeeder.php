<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('tests')->insert([
            'name' => 'On 5 minute interval',
            'published_at' => '2024-06-28 09:15:00'
        ]);


        DB::table('tests')->insert([
            'name' => 'Not on 5 minute interval',
            'published_at' => '2024-06-28 09:18:00'
        ]);
    }
}
