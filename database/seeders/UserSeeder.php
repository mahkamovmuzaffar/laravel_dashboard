<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@themesbrand.com'],
            [
                'name' => 'admin',
                'dob' => '2000-10-10',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'avatar' => 'images/avatar-1.jpg',
            ]
        );
    }
}
