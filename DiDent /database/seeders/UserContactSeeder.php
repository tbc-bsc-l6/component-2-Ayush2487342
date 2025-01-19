<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UserContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Loop to insert 20 records into the 'user_contacts' table
        for ($i = 0; $i < 20; $i++) {
            DB::table('user_contacts')->insert([
                'name' => $faker->name, // Random name
                'email' => $faker->unique()->safeEmail, // Random unique email
                'phone' => $faker->phoneNumber, // Random phone number
                'message' => $faker->text(mt_rand(25, 50)), // Random message between 25 and 50 characters
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
