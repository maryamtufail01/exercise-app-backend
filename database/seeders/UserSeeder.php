<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Add this to use the Hash class
use App\Models\User;  // Add this to reference the User model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add your custom user data here
        User::create([
            'name' => 'Maryam Tufail',
            'email' => 'maryamtufail190@gmail.com',
            'password' => Hash::make('12345678'), // Ensure the password is securely hashed
        ]);
    }
}
