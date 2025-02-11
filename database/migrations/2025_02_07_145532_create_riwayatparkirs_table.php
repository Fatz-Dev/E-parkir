<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Membuat kelas anonim yang memperluas kelas Migration
return new class extends Migration
{
    /**
     * Menjalankan migrasi.
     */
    public function up(): void
    {
        // Membuat tabel 'riwayatparkirs'
        Schema::create('riwayatparkirs', function (Blueprint $table) {
            $table->id(); // Kolom ID auto increment
            $table->foreignId('jeniskendaraan_id')->constrained('jeniskendaraans'); // Kolom foreign key yang terhubung ke tabel 'jeniskendaraans'
            $table->string('nomor_plat'); // Kolom string untuk nomor plat kendaraan
            $table->dateTime('waktu_masuk'); // Kolom datetime untuk waktu masuk
            $table->dateTime('waktu_keluar')->nullable(); // Kolom datetime untuk waktu keluar, bisa null
            $table->integer('durasi')->nullable(); // Kolom integer untuk durasi, bisa null
            $table->integer('biaya')->nullable(); // Kolom integer untuk biaya, bisa null
            $table->timestamps(); // Kolom timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Membalikkan migrasi.
     */
    public function down(): void
    {
        // Menghapus tabel 'riwayatparkirs' jika ada
        Schema::dropIfExists('riwayatparkirs');
    }
};
