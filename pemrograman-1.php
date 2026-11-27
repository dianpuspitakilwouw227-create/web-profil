<?php
// Berita nomor 1 kategori pemrograman. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'pemrograman-1';
$kategori_slug = 'pemrograman';
$judul = 'Dulu Putus Sekolah, Siswa Sekolah Rakyat Kini Belajar Pemrograman';
$tanggal = '18 Oktober 2026';
$isi = <<<TEKS
Antara mengisahkan seorang siswa Sekolah Rakyat bernama Raihan yang dulu putus sekolah, tetapi kini belajar pemrograman.

Raihan mengatakan belajar di sekolah itu memberinya harapan baru tentang masa depan karena sekarang semuanya serba digital. Ia pun tertarik menjadi programmer. Ucapan itu disampaikannya saat kegiatan belajar pada 12 Oktober 2026.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5795001/dulu-putus-sekolah-siswa-sekolah-rakyat-kini-belajar-pemrograman';
require __DIR__ . '/../includes/berita-template.php';
