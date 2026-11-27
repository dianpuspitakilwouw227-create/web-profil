<?php
// Berita nomor 4 kategori it. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'it-4';
$kategori_slug = 'it';
$judul = 'Pameran ALLPrint Indonesia 2026 Tampilkan Inovasi Teknologi Percetakan';
$tanggal = '8 Oktober 2026';
$isi = <<<TEKS
Pameran internasional percetakan dan teknologi grafika ALLPrint Indonesia 2026 resmi dibuka di JIExpo Kemayoran, Jakarta, pada Rabu, 7 Oktober 2026.

Menurut judul pemberitaan Okezone, pameran ini menampilkan inovasi-inovasi terbaru di bidang teknologi percetakan.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://digital.okezone.com/view/2026/10/08/1/106263/pameran-allprint-indonesia-2026-tampilkan-inovasi-teknologi-percetakan';
require __DIR__ . '/../includes/berita-template.php';
