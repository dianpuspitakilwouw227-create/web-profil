<?php
// Berita nomor 2 kategori politik. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'politik-2';
$kategori_slug = 'politik';
$judul = 'Menaker: Penetapan Upah Minimum 2027 Mengacu UU Pelindungan Pekerja';
$tanggal = '17 November 2026';
$isi = <<<TEKS
Menteri Ketenagakerjaan Yassierli mengatakan mekanisme penetapan upah minimum 2027 merujuk pada Pasal 137 sampai 139 Undang-Undang Nomor 27 Tahun 2026 tentang Pelindungan Pekerja.

Aturan ini menjadi pedoman bagi daerah dalam menetapkan upah minimum tahun depan.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5858651/menaker-penetapan-upah-minimum-2027-mengacu-uu-pelindungan-pekerja';
require __DIR__ . '/../includes/berita-template.php';
