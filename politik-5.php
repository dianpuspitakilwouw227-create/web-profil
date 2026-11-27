<?php
// Berita nomor 5 kategori politik. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'politik-5';
$kategori_slug = 'politik';
$judul = 'Pemerintah Hubungkan Produksi Ikan dengan Kebutuhan MBG';
$tanggal = '17 November 2026';
$isi = <<<TEKS
Antara memberitakan bahwa pemerintah menghubungkan produksi ikan dengan kebutuhan program Makan Bergizi Gratis (MBG).

Rincian langkah dan pihak yang terlibat dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5859467/pemerintah-hubungkan-produksi-ikan-dengan-kebutuhan-mbg';
require __DIR__ . '/../includes/berita-template.php';
