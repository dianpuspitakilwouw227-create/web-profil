<?php
// Berita nomor 1 kategori politik. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'politik-1';
$kategori_slug = 'politik';
$judul = 'KTT ASEAN-Jepang, Prabowo: Indonesia Bangun PLTS Berkapasitas 100 GW';
$tanggal = '17 November 2026';
$isi = <<<TEKS
Presiden Prabowo Subianto mengatakan Indonesia mulai membangun pembangkit listrik tenaga surya (PLTS) berkapasitas besar, mencapai 100 gigawatt (GW), sebagai bagian dari upaya memperkuat ketahanan energi nasional.

Pernyataan ini disampaikan dalam KTT ke-29 ASEAN-Jepang di Manila. Selain PLTS, Prabowo menyebut Indonesia juga mengembangkan biodiesel B50 dan bioetanol.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5859455/ktt-asean-jepang-prabowo-indonesia-bangun-plts-berkapasitas-100-gw';
require __DIR__ . '/../includes/berita-template.php';
