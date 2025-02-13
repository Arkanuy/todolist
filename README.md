# Company Task Management System 🚀

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4E5AEE?style=for-the-badge&logo=laravel-livewire&logoColor=white)
![Mary UI](https://img.shields.io/badge/Mary_UI-1.0-4A5568?style=for-the-badge)

Sistem manajemen tugas internal perusahaan berbasis web dengan fitur assignment tugas dari admin ke karyawan. Dibangun menggunakan Laravel dan Livewire 3.5 dengan antarmuka modern Mary-UI.



## Fitur Utama ✨

### 👨💻 Admin Panel
- Buat, edit, dan hapus tugas
- Assign tugas ke karyawan tertentu
- Atur prioritas (Tinggi/Sedang/Rendah)
- Set deadline dengan kalender interaktif
- Pantau progres tugas real-time
- Kirim notifikasi ke karyawan
- Kelola akun karyawan

### 👩💼 Dashboard Karyawan
- Lihat daftar tugas terbaru
- Update status tugas (Dalam Proses/Selesai)
- Submit laporan pekerjaan
- Filter tugas berdasarkan status/prioritas
- Sistem notifikasi internal
- Profil pengguna dengan avatar

## Teknologi Yang Digunakan 🔧

**Backend:**
- Laravel 11
- Livewire 3.5
- MySQL

**Frontend:**
- Mary UI Component Library
- Tailwind CSS
- Alpine.js
- Blade Templating

## Persyaratan Sistem 📋

- PHP 8.1+
- Composer 2.5+
- Node.js 18+
- MySQL 8.0+

## Instalasi ⚙️

1. Clone repositori:
```bash
git clone https://github.com/Arkanuy/todolist.git
cd todolist
```
2. Install dependencies:
```bash
composer install
npm install
```
3. Setup environment:
```bash
cp .env.example .env
php artisan key:generate
```
4. Konfigurasi database di .env:
```bash
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```
5. Jalankan migrasi & seeder:
```bash
php artisan migrate --seed
```
6. Build assets:
```bash
npm run build
```
7. Jalankan server:
```bash
php artisan serve
```
