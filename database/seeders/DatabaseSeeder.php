<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Rosanyelis Mendoza',
            'email' => 'rosanyelismendoza@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::create([
            'name' => 'Noemie',
            'email' => 'noemi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\RedesSocial::create([
            'type' => 'Facebook',
            'url' => '',
        ]);
        \App\Models\RedesSocial::create([
            'type' => 'Instagram',
            'url' => '',
        ]);
        \App\Models\RedesSocial::create([
            'type' => 'LinkedIn',
            'url' => '',
        ]);
        \App\Models\RedesSocial::create([
            'type' => 'Twitter',
            'url' => '',
        ]);
    }
}
