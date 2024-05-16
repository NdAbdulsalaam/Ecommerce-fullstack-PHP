<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sellers')->truncate(); //for cleaning earlier data to avoid duplicate entries
        // Define sample seller data
        $sellers = [
            [
                'name' => 'Seller 1',
                'email' => 'seller1@example.com',
                'password' => Hash::make('password'),
                'company' => 'Avant Health',
                'phone_number' => '123456789',
                'address' => '123 Main Street, City, Country',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample sellers as needed
        ];

        // Insert sample sellers into the database
        DB::table('sellers')->insert($sellers);
    }
}
