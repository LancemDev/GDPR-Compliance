<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('password')],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'password' => Hash::make('password')],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'password' => Hash::make('password')],
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'password' => Hash::make('password')],
            ['name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'password' => Hash::make('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
