# E-Parkir

Sistem manajemen parkir berbasis web menggunakan Laravel 11 dan MySQL.

## Persyaratan Sistem
- PHP >= 8.2
- Composer
- MySQL
- Node.js & NPM (untuk frontend asset build jika diperlukan)

## Cara Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/username/E-parkir.git
cd E-parkir
```

### 2. Install Dependensi
```bash
composer install
npm install && npm run build
```

### 3. Konfigurasi Lingkungan
Buat file `.env` dari `.env.example`:
```bash
cp .env.example .env
```
Kemudian edit file `.env` untuk menyesuaikan dengan database MySQL Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eparkir
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key dan Migrasi Database
```bash
php artisan key:generate
php artisan migrate --seed
```

### 5. Jalankan Server
```bash
php artisan serve
```
Akses aplikasi di `http://127.0.0.1:8000`

## Akun Default (Seeder)
- **Admin**  
  Email: `admin@admin.com`  
  Password: `Admin123`

## Kontributor
Silakan fork dan pull request jika ingin berkontribusi.

## Lisensi
Proyek ini menggunakan lisensi MIT.

