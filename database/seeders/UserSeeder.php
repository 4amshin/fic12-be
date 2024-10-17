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
        User::factory()->create([
            'name' => 'Admin FIC12',
            'email' => 'admin@fic12.id',
            'role' => 'admin',
            'email_verified_at' => now(),
            'unhashed_password' => 'password',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Pak Fulan',
            'email' => 'staff@fic12.id',
            'role' => 'staff',
            'email_verified_at' => now(),
            'unhashed_password' => 'password',
            'password' => Hash::make('password'),
        ]);

        User::factory(5)->create();
    }
}
