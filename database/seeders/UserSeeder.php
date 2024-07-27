<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' =>  'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'admin',
                'status' => 1
            ],
            [
                'name' => 'Vendor',
                'email' =>  'vendor@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'vendor',
                'status' => 1
            ],
            [
                'name' => 'Customer',
                'email' =>  'customer@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'customer',
                'status' => 1
            ],
        ]);
    }
}
