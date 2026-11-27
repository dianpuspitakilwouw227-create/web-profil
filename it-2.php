<?php
// Berita nomor 2 kategori it. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'it-2';
$kategori_slug = 'it';
$judul = 'Bank Perkuat Anggaran Teknologi Informasi demi Hadapi Ancaman Siber';
$tanggal = '13 November 2026';
$isi = <<<TEKS
Menurut laporan Kontan, perbankan memperkuat anggaran teknologi informasi sebagai respons atas ancaman serangan siber yang terus mengintai sektor keuangan.

Rincian angka anggaran dan bank mana saja yang dimaksud dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://insight.kontan.co.id/news/bank-perkuat-anggaran-teknologi-informasi-demi-hadapi-ancaman-siber-1';
require __DIR__ . '/../includes/berita-template.php';
