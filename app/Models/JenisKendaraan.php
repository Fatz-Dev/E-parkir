<?php

namespace App\Models; // Mendeklarasikan namespace untuk model ini

use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Eloquent ORM

class JenisKendaraan extends Model // Mendefinisikan kelas JenisKendaraan yang merupakan turunan dari Model
{
    //
    protected $fillable = ['nama', 'tarif']; // Menentukan atribut yang dapat diisi secara massal
    protected $table = 'jeniskendaraans'; // Menentukan nama tabel yang terkait dengan model ini
}
