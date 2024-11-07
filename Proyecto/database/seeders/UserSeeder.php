<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 usuarios con diferentes nombres
        $users = [
            ['name' => 'Jose Luis', 'email' => 'Jose_Luis@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Jhean Carlos', 'email' => 'Jhean_Carlos@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Franklin', 'email' => 'Franklin@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Dongo', 'email' => 'Dongo@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Jorge', 'email' => 'Jorge@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Deisy', 'email' => 'Deisy@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Ruby', 'email' => 'Ruby@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Hadde', 'email' => 'Hadde@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Ruth', 'email' => 'Ruth@example.com', 'password' => Hash::make('12345678')],
            ['name' => 'Margot', 'email' => 'Margot@example.com', 'password' => Hash::make('12345678')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
