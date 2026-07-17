<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        

        $positions = [

            // ===========================
            // IT
            // ===========================
            [
                'division_id' => 1,
                'kode_jabatan' => 'IT001',
                'nama_jabatan' => 'IT Manager',
                'gaji_pokok' => 12000000,
                'tunjangan_jabatan' => 3000000,
            ],
            [
                'division_id' => 1,
                'kode_jabatan' => 'IT002',
                'nama_jabatan' => 'Backend Developer',
                'gaji_pokok' => 8500000,
                'tunjangan_jabatan' => 1500000,
            ],
            [
                'division_id' => 1,
                'kode_jabatan' => 'IT003',
                'nama_jabatan' => 'Frontend Developer',
                'gaji_pokok' => 8000000,
                'tunjangan_jabatan' => 1500000,
            ],
            [
                'division_id' => 1,
                'kode_jabatan' => 'IT004',
                'nama_jabatan' => 'IT Support',
                'gaji_pokok' => 6000000,
                'tunjangan_jabatan' => 1000000,
            ],

            // ===========================
            // DIGITAL CREATIVE
            // ===========================
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC001',
                'nama_jabatan' => 'Creative Manager',
                'gaji_pokok' => 11000000,
                'tunjangan_jabatan' => 2500000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC002',
                'nama_jabatan' => 'Senior Graphic Designer',
                'gaji_pokok' => 8000000,
                'tunjangan_jabatan' => 1500000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC003',
                'nama_jabatan' => 'Graphic Designer',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC004',
                'nama_jabatan' => 'UI/UX Designer',
                'gaji_pokok' => 7500000,
                'tunjangan_jabatan' => 1200000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC005',
                'nama_jabatan' => 'Motion Graphic Designer',
                'gaji_pokok' => 7000000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC006',
                'nama_jabatan' => 'Video Editor',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC007',
                'nama_jabatan' => 'Photographer',
                'gaji_pokok' => 6000000,
                'tunjangan_jabatan' => 800000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC008',
                'nama_jabatan' => 'Content Creator',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 900000,
            ],
            [
                'division_id' => 5,
                'kode_jabatan' => 'DC009',
                'nama_jabatan' => 'Social Media Designer',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 900000,
            ],

            // ===========================
            // MARKETING
            // ===========================
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT001',
                'nama_jabatan' => 'Marketing Manager',
                'gaji_pokok' => 11000000,
                'tunjangan_jabatan' => 2500000,
            ],
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT002',
                'nama_jabatan' => 'Digital Marketing Specialist',
                'gaji_pokok' => 7500000,
                'tunjangan_jabatan' => 1200000,
            ],
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT003',
                'nama_jabatan' => 'SEO Specialist',
                'gaji_pokok' => 7000000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT004',
                'nama_jabatan' => 'Ads Specialist',
                'gaji_pokok' => 7500000,
                'tunjangan_jabatan' => 1200000,
            ],
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT005',
                'nama_jabatan' => 'Content Marketing',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 900000,
            ],
            [
                'division_id' => 4,
                'kode_jabatan' => 'MKT006',
                'nama_jabatan' => 'Partnership Officer',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 900000,
            ],

            // ===========================
            // HR
            // ===========================
            [
                'division_id' => 2,
                'kode_jabatan' => 'HR001',
                'nama_jabatan' => 'HR Manager',
                'gaji_pokok' => 10000000,
                'tunjangan_jabatan' => 2000000,
            ],
            [
                'division_id' => 2,
                'kode_jabatan' => 'HR002',
                'nama_jabatan' => 'HR Staff',
                'gaji_pokok' => 6500000,
                'tunjangan_jabatan' => 900000,
            ],

            // ===========================
            // FINANCE
            // ===========================
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN001',
                'nama_jabatan' => 'Finance Manager',
                'gaji_pokok' => 11000000,
                'tunjangan_jabatan' => 2500000,
            ],
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN002',
                'nama_jabatan' => 'Senior Accountant',
                'gaji_pokok' => 8500000,
                'tunjangan_jabatan' => 1500000,
            ],
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN003',
                'nama_jabatan' => 'Accountant',
                'gaji_pokok' => 7000000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN004',
                'nama_jabatan' => 'Payroll Officer',
                'gaji_pokok' => 7000000,
                'tunjangan_jabatan' => 1000000,
            ],
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN005',
                'nama_jabatan' => 'Tax Officer',
                'gaji_pokok' => 7500000,
                'tunjangan_jabatan' => 1200000,
            ],
            [
                'division_id' => 3,
                'kode_jabatan' => 'FIN006',
                'nama_jabatan' => 'Cashier',
                'gaji_pokok' => 5500000,
                'tunjangan_jabatan' => 700000,
            ],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}