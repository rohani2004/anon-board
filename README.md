<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Anon Board 

Aplikasi papan pesan anonim sederhana. Pengunjung dapat mengirim pesan tanpa identitas, dan semua pesan tampil dalam satu daftar. 

 ## Teknologi
 - Laravel 13
 - MySQL 
 - Blade 
 - TailwindCSS (CDN) 

 ## Fitur 
 - Kirim pesan anonim (Create) 
 - Lihat daftar pesan (Read) 
 - Ubah pesan (Update) 
 - Hapus pesan (Delete)

 ## Cara Menjalankan  
 1. Clone repository ini 
 2. Jalankan composer install 
 3. Salin .env.example menjadi .env, lalu jalankan php artisan key:generate 
 4. Buat database anon_board, lalu jalankan php artisan migrate 
 5. Jalankan php artisan serve, buka http://127.0.0.1:8000 
 
  Dibuat pada Skill Up Class HMPS-TI STMIK Widya Utama. 