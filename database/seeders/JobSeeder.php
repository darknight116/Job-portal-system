<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $user = User::factory()->create([
                'role' =>2
            ]);
            Job::factory(50)->create([
                'user_id' => $user_id
            ]);
    }
}
