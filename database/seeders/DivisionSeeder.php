<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    public function run(): void
    {
        Division::firstOrCreate(
            ['kode_divisi' => 'IT'],
            ['nama_divisi' => 'Information Technology']
        );

        Division::firstOrCreate(
            ['kode_divisi' => 'HR'],
            ['nama_divisi' => 'Human Resource']
        );

        Division::firstOrCreate(
            ['kode_divisi' => 'DC'],
            ['nama_divisi' => 'Digital Creative']
        );

        Division::firstOrCreate(
            ['kode_divisi' => 'FIN'],
            ['nama_divisi' => 'Finance']
        );

        Division::firstOrCreate(
            ['kode_divisi' => 'MKT'],
            ['nama_divisi' => 'Marketing']
        );
    }
}