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
        // Membuat tabel 'jeniskendaraans'
        Schema::create('jeniskendaraans', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom 'id' sebagai primary key
            $table->string('nama'); // Menambahkan kolom 'nama' dengan tipe data string
            $table->integer('tarif'); // Menambahkan kolom 'tarif' dengan tipe data integer
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Membalikkan migrasi.
     */
    public function down(): void
    {
        // Menghapus tabel 'jeniskendaraans' jika ada
        Schema::dropIfExists('jeniskendaraans');
    }
};
