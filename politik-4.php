<?php
// Berita nomor 4 kategori politik. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'politik-4';
$kategori_slug = 'politik';
$judul = 'Prabowo: RI Buka Peluang Kerja Sama Logam Tanah Jarang dengan Jepang';
$tanggal = '17 November 2026';
$isi = <<<TEKS
Presiden Prabowo Subianto menyampaikan bahwa Indonesia membuka peluang kerja sama dengan Jepang di bidang logam tanah jarang.

Pernyataan ini muncul di sela rangkaian KTT ASEAN-Jepang di Manila. Rincian bentuk kerja samanya dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5859539/prabowo-ri-buka-peluang-kerja-sama-logam-tanah-jarang-dengan-jepang';
require __DIR__ . '/../includes/berita-template.php';
