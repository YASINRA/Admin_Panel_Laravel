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
                'password' => bcrypt('1234'),
                'role' => 'admin'
            ],
            // [
            //     'name' => 'Vendor',
            //     'email' =>  'vendor@gmail.com',
            //     'password' => bcrypt('1234'),
            //     'role' => 'vendor'
            // ],
            // [
            //     'name' => 'Customer',
            //     'email' =>  'customer@gmail.com',
            //     'password' => bcrypt('1234'),
            //     'role' => 'customer'
            // ],
        ]);
    }
}
