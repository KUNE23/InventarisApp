<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'level' => "Admin",
        ]);
        User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@karyawan.com',
            'password' => bcrypt('karyawan'),
            'level' => "Karyawan",
        ]);

        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
