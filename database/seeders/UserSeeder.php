<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Test User 2',
                'email' => 'test2@example.com',
                'password' => bcrypt('password2'),
            ],
        ];

        User::query()->insert($users);
    }
}
