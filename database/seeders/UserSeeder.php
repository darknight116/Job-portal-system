<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create([
            'role' => 1,
            'password' => 'password'
        ]);
        User::factory(10)->create([
            'role' => 2
        ]);
        User::factory(1)->create([
            'role' => 3
        ]);

    }
}
