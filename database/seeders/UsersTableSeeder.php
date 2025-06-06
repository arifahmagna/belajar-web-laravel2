<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'remember_token' => str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'User',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'user',
                'remember_token' => str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
        //
    }
}
