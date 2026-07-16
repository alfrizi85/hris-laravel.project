<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payroll extends Model
{
    protected $fillable = [
        'employee_id',
        'bulan',
        'tahun',
        'gaji_pokok',
        'tunjangan',
        'upah_lembur',
        'potongan',
        'total_gaji',
        'status',
        'tanggal_pembayaran',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}