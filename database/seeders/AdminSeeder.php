<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AdminSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'brew-bites.fall@admin.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
        ])->assignRole('admin');
    }
}
