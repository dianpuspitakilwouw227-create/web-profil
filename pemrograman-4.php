<?php
// Berita nomor 4 kategori pemrograman. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'pemrograman-4';
$kategori_slug = 'pemrograman';
$judul = 'Apa Itu PHP? Celah Keamanannya Membuat Situs Web Terganggu';
$tanggal = 'Tanggal terbit: lihat di sumber';
$isi = <<<TEKS
Fortune IDN menjelaskan bahwa PHP pertama kali dikembangkan oleh Rasmus Lerdorf pada 1994 dengan nama Personal Home Page.

Bahasa pemrograman ini banyak dipakai pada platform populer seperti WordPress dan Wikipedia. Judul artikelnya juga mengingatkan bahwa celah keamanan pada PHP dapat mengganggu situs web.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.fortuneidn.com/tech/apa-itu-php-celah-keamanan-buat-situs-web-terganggu-d7w02-00-fykp7-4pwn09';
require __DIR__ . '/../includes/berita-template.php';
