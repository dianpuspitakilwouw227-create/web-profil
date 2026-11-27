<?php
// Berita nomor 5 kategori it. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'it-5';
$kategori_slug = 'it';
$judul = 'Teknologi Disruptif Diperkirakan Akan Memajukan Arah Inovasi';
$tanggal = '3 November 2026';
$isi = <<<TEKS
Antara melaporkan bahwa teknologi disruptif, yaitu teknologi yang mengubah cara kerja dan pasar yang sudah ada, diperkirakan akan memajukan arah inovasi ke depan.

Pembahasan lengkap dan pihak yang memberi perkiraan dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5827783/teknologi-disruptif-diperkirakan-akan-memajukan-arah-inovasi';
require __DIR__ . '/../includes/berita-template.php';
