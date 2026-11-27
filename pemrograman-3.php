<?php
// Berita nomor 3 kategori pemrograman. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'pemrograman-3';
$kategori_slug = 'pemrograman';
$judul = '10 Bahasa Pemrograman yang Umum Digunakan dan Dipelajari 2026';
$tanggal = '14 Januari 2026';
$isi = <<<TEKS
Hostinger membahas 10 bahasa pemrograman yang banyak dipakai dan dipelajari pada 2026. Salah satunya Python, yang populer di kalangan developer sebagai bahasa skrip.

Python disebut termasuk bahasa yang paling mudah dipelajari karena sintaksnya mirip bahasa Inggris, sehingga cocok menjadi titik awal untuk karier developer atau software engineer.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.hostinger.com/id/tutorial/?p=17302';
require __DIR__ . '/../includes/berita-template.php';
