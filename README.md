# TugasWeb-P9-LaravelSetup

Tugas Rutin 9: Setup Laravel (Composer, MySQL/phpMyAdmin, route, Blade, controller, model).

## Prasyarat
- PHP >= 8.2
- Composer
- MySQL (XAMPP) dan phpMyAdmin
- Git

## Langkah Install

1. Install Composer dari https://getcomposer.org, lalu cek dengan `composer -V`.
2. Buat project Laravel:
```bash
   composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
   cd TugasWeb-P9-LaravelSetup
```
3. Buka phpMyAdmin (http://localhost/phpmyadmin), lalu buat database bernama `tugasweb_p9`.
4. Atur koneksi database di file `.env`:
```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasweb_p9
   DB_USERNAME=root
   DB_PASSWORD=
```
5. Buat controller dan model beserta migration:
```bash
   php artisan make:controller PageController
   php artisan make:model Mahasiswa -m
```
6. Jalankan migrasi untuk membuat tabel:
```bash
   php artisan migrate
```
7. Jalankan server:
```bash
   php artisan serve
```
   Buka http://127.0.0.1:8000 di browser.

##