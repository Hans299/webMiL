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
        // User::factory(10)->create();

        $data = [
            [
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'role' => 'superadmin',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ],
        ];

        User::insert($data);
    }
}
