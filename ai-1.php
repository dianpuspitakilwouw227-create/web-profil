<?php
// Berita nomor 1 kategori ai. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'ai-1';
$kategori_slug = 'ai';
$judul = 'Prabowo Minta Penggunaan AI Tetap dalam Kendali Manusia';
$tanggal = '17 November 2026';
$isi = <<<TEKS
Presiden Prabowo Subianto menekankan bahwa penggunaan kecerdasan buatan (AI) harus berlangsung aman dan tetap berada dalam kendali manusia yang nyata dan efektif.

Pernyataan itu disampaikan dalam KTT ke-29 ASEAN-Jepang di Manila, Filipina, pada Selasa, 17 November 2026. Prabowo mengakui AI sudah memberi kemudahan dan meningkatkan efisiensi dalam kehidupan masyarakat, tetapi keamanannya tetap harus dijaga.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5859607/prabowo-minta-penggunaan-ai-tetap-dalam-kendali-manusia';
require __DIR__ . '/../includes/berita-template.php';
