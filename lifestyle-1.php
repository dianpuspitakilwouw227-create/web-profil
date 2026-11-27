<?php
// Berita nomor 1 kategori lifestyle. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'lifestyle-1';
$kategori_slug = 'lifestyle';
$judul = 'Raja Ampat, Surga Bahari di Ujung Barat Papua';
$tanggal = 'Tanggal terbit: lihat di sumber';
$isi = <<<TEKS
Menurut situs Indonesia.travel, Kepulauan Raja Ampat berada di bagian paling barat Papua dan membentang di area sekitar 4,6 juta hektar.

Selain pemandangan alamnya yang membuat wisatawan enggan pulang, pengunjung juga bisa mencicipi kuliner tradisional Papua seperti papeda dan sinole.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.indonesia.travel/id-id/destination/maluku-papua/southwest-papua/raja-ampat/';
require __DIR__ . '/../includes/berita-template.php';
