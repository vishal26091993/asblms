<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'student@test.com',
            ],
            [
                'name' => 'Test Student',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
