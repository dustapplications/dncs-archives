<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,
            InstituteSeeder::class,
            OfficeSeeder::class,
            DirectorySeeder::class,
            ProgramSeeder::class,
            ProgramUserSeeder::class,
            ProcessSeeder::class,
        ]);
    }
}
