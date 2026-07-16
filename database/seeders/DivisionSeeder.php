<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Division::insert([
        [
            'kode_divisi' => 'IT',
            'nama_divisi' => 'Information Technology',
            'deskripsi_divisi' => 'Divisi Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kode_divisi' => 'HR',
            'nama_divisi' => 'Human Resource',
            'deskripsi' => 'Divisi Sumber Daya Manusia',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kode_divisi' => 'FIN',
            'nama_divisi' => 'Finance',
            'deskripsi' => 'Divisi Keuangan',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kode_divisi' => 'MKT',
            'nama_divisi' => 'Marketing',
            'deskripsi' => 'Divisi Marketing',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kode_divisi' => 'DC',
            'nama_divisi' => 'Digital Creative',
            'deskripsi' => 'Divisi Digital Creative',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}