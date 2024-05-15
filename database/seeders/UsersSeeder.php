<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'name' => 'Nuyola Admin',
          'username' => 'nuyolaadmin',
          'role' => 'admin',
          'email' => 'nuyolaadmin@gmail.com',
          'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
          'name' => 'Nuyola Seller',
          'username' => 'nuyolaseller',
          'role' => 'seller',
          'email' => 'nuyolaseller@gmail.com',
          'password' => Hash::make('seller'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nuyola User',
            'username' => 'nuyolauser',
            'role' => 'user',
            'email' => 'nuyolauser@gmail.com',
            'password' => Hash::make('user'),
          ]);
      }
    }

