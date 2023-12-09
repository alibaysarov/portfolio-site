<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::insert([
             'fullname' => 'Ali Baysarov',
             'email' => 'alibajsarov353@gmail.com',
             'position' =>'Fullstack Developer',
             'password' => '12345'
         ]);
    }
}
