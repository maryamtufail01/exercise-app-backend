<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Add your custom user here
        User::create([
            'name' => 'Maryam Tufail', // Your name
            'email' => 'maryamtufail190@gmail.com', // Your email
            'password' => Hash::make('12345678'), // Your password (hashed)
        ]);

        // Optionally, you can still use the factory method to create more users
        // User::factory(10)->create();
    }
}
