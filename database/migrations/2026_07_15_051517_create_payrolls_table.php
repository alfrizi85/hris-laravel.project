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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
                ->constrained('employees')
                ->cascadeOnDelete();

                $table->string('bulan');
                $table->year('tahun');
                $table->decimal('gaji_pokok', 12, 2);
                $table->decimal('tunjangan', 12, 2)->default(0);
                $table->decimal('upah_lembur', 12, 2)->default(0);
                $table->decimal('potongan', 12, 2)->default(0);
                $table->decimal('total_gaji', 12, 2);

                $table->enum('status', ['Draft', 'Processing', 'Paid'])->default('Draft');
                $table->date('tanggal_pembayaran')->nullable();
                $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
