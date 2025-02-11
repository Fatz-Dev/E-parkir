<?php  
namespace Database\Seeders; // Namespace untuk Seeder

use App\Models\User; // Menggunakan model User untuk mengisi data ke dalam database
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Baris ini tidak digunakan, bisa dihapus atau dibiarkan
use Illuminate\Database\Seeder; // Menggunakan kelas Seeder bawaan Laravel

class DatabaseSeeder extends Seeder 
{
    /**
     * Fungsi untuk menjalankan seeder database.
     */
    public function run(): void 
    {
        // Membuat data user baru secara otomatis
        User::create([
            'name' => 'Admin', // Nama user yang akan dibuat
            'email' => 'fata@gmail.com', // Email user
            'password' => bcrypt('Admin123'), // Password user, dienkripsi menggunakan bcrypt
        ]);
    }
}
