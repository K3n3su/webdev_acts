<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Kenneth',
            'email' => 'kenneth@example.com',
            'password' => Hash::make('password123'), // Password is securely hashed
            'course' => 'BSIT',
            'age' => 20,
            'address' => 'Dumaguete City',
        ]);
    }
}
