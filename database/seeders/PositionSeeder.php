<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Position::insert([
        [
            'division_id' => 1,
            'kode_jabatan' => 'IT001',
            'nama_jabatan' => 'Programmer',
            'gaji_pokok' => 7000000,
            'tunjangan_jabatan' => 1000000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'division_id' => 1,
            'kode_jabatan' => 'IT002',
            'nama_jabatan' => 'UI/UX Designer',
            'gaji_pokok' => 6500000,
            'tunjangan_jabatan' => 900000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'division_id' => 2,
            'kode_jabatan' => 'HR001',
            'nama_jabatan' => 'HR Staff',
            'gaji_pokok' => 5000000,
            'tunjangan_jabatan' => 700000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'division_id' => 3,
            'kode_jabatan' => 'FIN001',
            'nama_jabatan' => 'Finance Staff',
            'gaji_pokok' => 5500000,
            'tunjangan_jabatan' => 800000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'division_id' => 4,
            'kode_jabatan' => 'MKT001',
            'nama_jabatan' => 'Marketing Staff',
            'gaji_pokok' => 5000000,
            'tunjangan_jabatan' => 600000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'division_id' => 5,
            'kode_jabatan' => 'DC001',
            'nama_jabatan' => 'Graphic Designer',
            'gaji_pokok' => 5500000,
            'tunjangan_jabatan' => 700000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
