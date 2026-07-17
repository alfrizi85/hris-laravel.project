<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DivisionSeeder::class,
            PositionSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}