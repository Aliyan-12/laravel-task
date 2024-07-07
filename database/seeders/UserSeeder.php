<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = \App\Models\User::create([
            'firstName' => 'System',
            'lastName' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123')
        ]);
        $user->assignRole('admin');

        $user = \App\Models\User::create([
            'firstName' => 'Polio',
            'lastName' => 'Agent',
            'email' => 'agent@agent.com',
            'password' => Hash::make('agent123')
        ]);
        $user->assignRole('agent');
    }
}
