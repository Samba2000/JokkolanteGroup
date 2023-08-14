<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'pseudo' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            // Replace 'password' with the desired password
            'role' => 'admin',
        ]);

    }
}