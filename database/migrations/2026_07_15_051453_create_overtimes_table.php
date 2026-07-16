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
        Schema::create('overtimes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
            ->constrained('employees')
            ->cascadeOnDelete();

            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->decimal('jumlah_jam', 5, 2);
            $table->decimal('upah_lembur', 10, 2);
            $table->decimal('total_upah', 10, 2);
            $table->text('keterangan')->nullable();

            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overtimes');
    }
};
