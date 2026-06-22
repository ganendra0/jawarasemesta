# Jawara Semesta

Aplikasi web berbasis **Laravel 11** dan **Filament PHP** yang digunakan untuk mendukung sistem Jawara Semesta.

## Teknologi yang Digunakan

* Laravel 11
* Filament PHP
* PHP 8.3+
* SQLite / MySQL / PostgreSQL
* Vite
* Tailwind CSS
* Node.js & NPM

---

## Persyaratan Sistem

Pastikan perangkat kamu telah terinstall:

* PHP >= 8.3
* Composer
* Node.js >= 20
* NPM
* Database (SQLite, MySQL, atau PostgreSQL)

---

## Instalasi Project

### 1. Clone Repository

```bash
git clone <repository-url>
cd jawarasemesta
```

### 2. Jalankan Setup Otomatis

Project ini menyediakan script setup untuk mempermudah instalasi awal.

```bash
composer setup
```

Script tersebut akan:

* Menginstall dependency PHP
* Membuat file `.env`
* Menggenerate application key
* Menjalankan migrasi database
* Menginstall dependency frontend
* Melakukan build asset frontend

---

## Setup Manual

Jika script setup tidak berjalan, lakukan langkah berikut:

```bash
composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

npm install

npm run build
```

---

## Konfigurasi Database

### SQLite (Default)

Laravel akan menggunakan SQLite secara otomatis.

Jika file database belum ada:

```bash
mkdir database
touch database/database.sqlite
```

Kemudian pada file `.env`:

```env
DB_CONNECTION=sqlite
```

### MySQL

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jawarasemesta
DB_USERNAME=root
DB_PASSWORD=
```

Setelah konfigurasi:

```bash
php artisan migrate
```

---

## Membuat Akun Administrator

Karena aplikasi menggunakan Filament, akun admin perlu dibuat terlebih dahulu.

```bash
php artisan make:filament-user
```

Ikuti instruksi yang muncul di terminal.

---

## Menjalankan Project

### Cara Praktis

```bash
composer dev
```

Perintah ini akan menjalankan:

* Laravel Development Server
* Vite Development Server
* Queue Worker

### Cara Manual

Terminal 1:

```bash
php artisan serve
```

Terminal 2:

```bash
npm run dev
```

---

## Akses Aplikasi

### Website

```
http://localhost:8000
```

### Dashboard Admin

```
http://localhost:8000/admin
```

Login menggunakan akun administrator yang telah dibuat sebelumnya.

---

## Struktur Project

```text
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

## Perintah Penting

### Menjalankan Migrasi

```bash
php artisan migrate
```

### Reset Database

```bash
php artisan migrate:fresh
```

### Menjalankan Seeder

```bash
php artisan db:seed
```

### Membersihkan Cache

```bash
php artisan optimize:clear
```

---

## Troubleshooting

### Dependency Error

```bash
composer install
npm install
```

### Build Frontend Error

```bash
rm -rf node_modules
npm install
npm run build
```

### Generate Ulang APP_KEY

```bash
php artisan key:generate
```

---

## Lisensi

Project ini dikembangkan untuk kebutuhan sistem **Jawara Semesta**.
