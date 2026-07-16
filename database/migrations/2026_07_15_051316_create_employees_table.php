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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

                $table->foreignId('division_id')
                    ->constrained('divisions')
                    ->cascadeOnDelete();

                    $table->foreignId('position_id')
                        ->constrained('positions')
                        ->cascadeOnDelete();

                        $table->string('nik')->unique();
                        $table->string('nama_lengkap');
                        $table->string('email_kantor')->unique();
                        $table->string('no_hp', 20)->nullable();

                        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                        $table->date('tanggal_lahir');
                        $table->text('alamat');
                        $table->string('agama');
                        $table->string('npwp')->nullable();
                        $table->string('bpjs')->nullable();
                        $table->date('tanggal_masuk');
                        $table->enum('status_pegawai', ['Tetap', 'Kontrak', 'Magang'])->default('Kontrak');
                        $table->boolean('is_active')->default(true);
                        $table->string('foto')->nullable();
                        $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};