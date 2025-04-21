<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use MoonShine\Laravel\MoonShineAuth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MoonShineAuth::getModel()::query()->create([
            moonshineConfig()->getUserField('username', 'email') => 'admin@admin.ru',
            moonshineConfig()->getUserField('name') => 'admin',
            moonshineConfig()->getUserField('password') => Hash::make('admin'),
        ]);
    }
}
