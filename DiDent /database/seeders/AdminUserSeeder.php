<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mohammad naushad Rain',
            'email' => 'msnausad678@gmail.com',
            'password' => Hash::make('password123'),  // Use a secure password
            'role' => 2,  // Assuming 2 is the role ID for admin in your system
        ]);
    }
}
