<?php

namespace App\Models; // Mendefinisikan namespace untuk model ini

use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Eloquent ORM

class Riwayatparkir extends Model // Mendefinisikan kelas Riwayatparkir yang merupakan turunan dari Model
{
    //
    protected $fillable = ['jeniskendaraan_id', 'nomor_plat', 'waktu_masuk', 'waktu_keluar', 'durasi', 'biaya'];
    // Mendefinisikan atribut yang dapat diisi secara massal (mass assignable)

    public function jeniskendaraan()
    {
        return $this->belongsTo(JenisKendaraan::class);
        // Mendefinisikan relasi belongsTo dengan model JenisKendaraan
    }
}
