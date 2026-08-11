<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Position::query()->delete();
        DB::statement('ALTER TABLE positions AUTO_INCREMENT = 1');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $positions = [
            [
                'division_kode' => 'IT',
                'kode_jabatan' => 'IT001',
                'nama_jabatan' => 'IT Manager',
            ],
            [
                'division_kode' => 'IT',
                'kode_jabatan' => 'IT002',
                'nama_jabatan' => 'Backend Developer',
            ],
            [
                'division_kode' => 'IT',
                'kode_jabatan' => 'IT003',
                'nama_jabatan' => 'Frontend Developer',
            ],
            [
                'division_kode' => 'IT',
                'kode_jabatan' => 'IT004',
                'nama_jabatan' => 'IT Support',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC001',
                'nama_jabatan' => 'Design',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC002',
                'nama_jabatan' => 'Motion Designer',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC003',
                'nama_jabatan' => 'Video Editor',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC004',
                'nama_jabatan' => 'Photography',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC005',
                'nama_jabatan' => 'UI/UX Designer',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC006',
                'nama_jabatan' => 'Creative Writer',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC007',
                'nama_jabatan' => 'Senior Designer',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC008',
                'nama_jabatan' => 'Social Media Specialist',
            ],
            [
                'division_kode' => 'DC',
                'kode_jabatan' => 'DC009',
                'nama_jabatan' => 'Creative Strategist',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT001',
                'nama_jabatan' => 'Marketing Manager',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT002',
                'nama_jabatan' => 'Digital Marketing Specialist',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT003',
                'nama_jabatan' => 'SEO Specialist',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT004',
                'nama_jabatan' => 'Ads Specialist',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT005',
                'nama_jabatan' => 'Content Marketing',
            ],
            [
                'division_kode' => 'MKT',
                'kode_jabatan' => 'MKT006',
                'nama_jabatan' => 'Content Creator',
            ],
            [
                'division_kode' => 'HR',
                'kode_jabatan' => 'HR001',
                'nama_jabatan' => 'HR Staff',
            ],
            [
                'division_kode' => 'HR',
                'kode_jabatan' => 'HR004',
                'nama_jabatan' => 'HR Manager',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN001',
                'nama_jabatan' => 'Accountant',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN002',
                'nama_jabatan' => 'Finance Officer',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN003',
                'nama_jabatan' => 'Finance Manager',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN004',
                'nama_jabatan' => 'Tax Officer',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN005',
                'nama_jabatan' => 'Payroll Officer',
            ],
            [
                'division_kode' => 'FIN',
                'kode_jabatan' => 'FIN006',
                'nama_jabatan' => 'Cashier',
            ],
        ];

        foreach ($positions as $positionData) {
            $divisionId = Division::query()
                ->where('kode_divisi', $positionData['division_kode'])
                ->value('id');

            Position::query()->firstOrCreate(
                ['kode_jabatan' => $positionData['kode_jabatan']],
                [
                    'division_id' => $divisionId,
                    'nama_jabatan' => $positionData['nama_jabatan'],
                    'gaji_pokok' => 0,
                    'tunjangan_jabatan' => 0,
                ]
            );
        }
    }
}