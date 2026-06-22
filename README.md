<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
# Jawara Semesta
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
Aplikasi web berbasis Laravel 11+ dan Filament PHP.
## About Laravel
## Persyaratan Sistem
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
Sebelum menjalankan project ini, pastikan sistem kamu sudah terinstall:
- **PHP** >= 8.3
- **Composer** (untuk mengelola dependensi PHP)
- **Node.js** & **NPM** (untuk mengelola dependensi Frontend)
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
## Cara Menjalankan Project Secara Lokal (Development)
Laravel is accessible, powerful, and provides tools required for large, robust applications.
### 1. Buka Direktori Project
Buka terminal dan masuk ke dalam folder project ini:
```bash
cd path/to/jawarasemesta
```
## Learning Laravel
### 2. Instalasi dan Pengaturan Awal
Project ini sudah dilengkapi dengan script otomatis untuk mempermudah proses setup dari awal. Jalankan perintah berikut di terminal:
```bash
composer setup
```
**Apa yang dilakukan script `setup` ini?**
- Menjalankan `composer install`
- Menyalin file `.env.example` menjadi `.env`
- Membuat Application Key (`php artisan key:generate`)
- Menjalankan migrasi database (`php artisan migrate`)
- Mengunduh library frontend (`npm install`)
- Mem-build asset frontend (`npm run build`)
Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
*(Opsional) Jika kamu mengalami kendala dengan script di atas, kamu bisa menjalankannya satu per satu:*
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```
In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
### 3. Konfigurasi Database (Jika Diperlukan)
Secara default, Laravel akan menggunakan **SQLite** dan membuat file database secara otomatis.
Namun, jika kamu ingin menggunakan **MySQL** atau **PostgreSQL**, buka file `.env` dan sesuaikan bagian ini:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_kamu
DB_USERNAME=root
DB_PASSWORD=
```
Setelah diubah, jalankan ulang migrasi dengan: `php artisan migrate`.
You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.
### 4. Membuat User Admin (Filament)
Karena aplikasi ini menggunakan **Filament** sebagai panel admin, kamu perlu membuat akun administrator untuk bisa login.
Jalankan perintah berikut dan ikuti instruksi yang muncul di layar (masukkan Nama, Email, dan Password):
```bash
php artisan make:filament-user
```
## Agentic Development
Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:
### 5. Menjalankan Server Lokal
Untuk mulai menjalankan aplikasi dalam mode development, gunakan perintah praktis ini:
```bash
composer require laravel/boost --dev
php artisan boost:install
composer dev
```
*(Perintah ini akan secara bersamaan menjalankan server PHP, Vite frontend, dan queue listener)*.
Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.
Atau, kamu bisa menjalankannya secara manual di dua terminal yang berbeda:
- Terminal 1: `php artisan serve`
- Terminal 2: `npm run dev`
## Contributing
### 6. Mengakses Aplikasi
Setelah server berjalan, kamu bisa membuka browser dan mengakses:
- **Halaman Utama**: [http://localhost:8000](http://localhost:8000)
- **Halaman Admin Filament**: [http://localhost:8000/admin](http://localhost:8000/admin)
Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
*(Gunakan email dan password yang baru saja kamu buat pada langkah ke-4 untuk masuk ke dashboard admin).*
## Code of Conduct
In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
## Security Vulnerabilities
If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# jawarasemesta
