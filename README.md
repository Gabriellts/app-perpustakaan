<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Perpustakaan Digital Kampus

Aplikasi web untuk mengelola data perpustakaan kampus, meliputi buku, kategori, anggota, transaksi peminjaman, pengembalian, dashboard statistik, laporan, dan REST API.

## Teknologi

- PHP
- Laravel 12
- MySQL
- Composer
- REST API
- Postman untuk pengujian API

## Fitur

- Login dan autentikasi pengguna.
- Hak akses admin dan petugas.
- Dashboard statistik perpustakaan.
- Manajemen kategori buku.
- Manajemen data buku.
- Manajemen data anggota.
- Transaksi peminjaman dan pengembalian.
- Laporan peminjaman.
- REST API untuk buku, anggota, peminjaman, dan statistik.
- Pagination.

## Persyaratan

Pastikan perangkat sudah memiliki:

- PHP sesuai persyaratan Laravel 12.
- Composer.
- MySQL atau XAMPP.
- Git.
- Web browser.
- Postman (untuk pengujian API).

## Instalasi

### 1. Clone repository

```bash
git clone <URL_REPOSITORY>
```

Masuk ke folder project:

```bash
cd app-perpustakaan
```

Ganti `<URL_REPOSITORY>` dengan URL repository GitHub project ini.

### 2. Install dependency

```bash
composer install
```

### 3. Siapkan file environment

Salin file `.env.example` menjadi `.env`.

Windows CMD:

```cmd
copy .env.example .env
```

PowerShell:

```powershell
Copy-Item .env.example .env
```

Linux atau macOS:

```bash
cp .env.example .env
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Konfigurasi database dan internal API

Buka file `.env`, kemudian sesuaikan konfigurasi berikut:

```env
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=

INTERNAL_API_URL=http://127.0.0.1:8011

SESSION_DRIVER=file
SESSION_LIFETIME=120
```

Pastikan MySQL sudah aktif dan database `db_perpustakaan` sudah dibuat.

### 6. Jalankan migration dan seeder

```bash
php artisan migrate:fresh --seed
```

Perintah tersebut akan membuat ulang tabel dan mengisi data awal melalui Seeder.

**Perhatian:** `migrate:fresh` menghapus seluruh tabel beserta datanya. Gunakan hanya ketika menyiapkan database baru atau ketika memang ingin mengulang seluruh data awal.

### 7. Bersihkan cache konfigurasi

```bash
php artisan optimize:clear
```

## Menjalankan Aplikasi

Aplikasi ini membutuhkan dua server Laravel yang berjalan secara bersamaan karena Dashboard dan Laporan mengambil data melalui internal REST API.

### Terminal 1 — Server utama

```bash
php artisan serve --port=8000
```

Website dapat diakses melalui:

http://127.0.0.1:8000

### Terminal 2 — Server API internal

Buka terminal baru pada folder project yang sama, kemudian jalankan:

```bash
php artisan serve --port=8011
```

API dapat diakses melalui:

http://127.0.0.1:8011/api

**Penting:** Jangan menutup salah satu terminal selama aplikasi digunakan. Kedua server harus tetap berjalan agar Dashboard dan Laporan dapat mengambil data dari API.

## Login

Contoh akun awal dari UserSeeder:

| Role | Email | Password |
|---|---|---|
| Admin | admin@pens.ac.id | password |
| Petugas | petugas1@pens.ac.id | password |
| Petugas | petugas2@pens.ac.id | password |

Ganti password akun setelah instalasi apabila aplikasi digunakan di luar lingkungan pengembangan.

## Endpoint REST API

Base URL:

`http://127.0.0.1:8011/api`

| Method | Endpoint | Keterangan |
|---|---|---|
| GET | `/books` | Daftar buku |
| GET | `/books/{id}` | Detail buku |
| POST | `/books` | Tambah buku |
| PUT | `/books/{id}` | Update buku |
| DELETE | `/books/{id}` | Hapus buku |
| GET | `/members` | Daftar anggota |
| GET | `/members/{id}` | Detail anggota |
| GET | `/loans` | Daftar peminjaman |
| POST | `/loans` | Tambah peminjaman |
| PUT | `/loans/{id}/kembalikan` | Pengembalian buku |
| GET | `/stats` | Statistik perpustakaan |

Endpoint dapat diuji menggunakan Postman.

## Struktur Dokumentasi Demo

Skenario demonstrasi aplikasi tersedia pada:

`DEMO.md`

File tersebut berisi urutan demonstrasi login, dashboard, pengelolaan data, peminjaman, pengembalian, laporan, dan REST API.

## Pengembang

Project ini dikembangkan sebagai bagian dari kegiatan praktikum dan proyek pembelajaran Laravel.

