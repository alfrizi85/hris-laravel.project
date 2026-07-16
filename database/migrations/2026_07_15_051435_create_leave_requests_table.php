<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
                ->constrained('employees')
                ->cascadeOnDelete();

                $table->date('tanggal_mulai');
                $table->date('tanggal_selesai');
                $table->integer('jumlah_hari');
                $table->enum('jenis_cuti', ['Cuti Tahunan', 'Cuti Sakit', 'Cuti Melahirkan', 'Cuti Lainnya']);
                $table->text('alasan');
                $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');

                $table->text('catatan_admin')->nullable();

                $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};