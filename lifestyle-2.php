<?php
// Berita nomor 2 kategori lifestyle. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'lifestyle-2';
$kategori_slug = 'lifestyle';
$judul = '15 Destinasi Wisata Indah di Raja Ampat';
$tanggal = 'Tanggal terbit: lihat di sumber';
$isi = <<<TEKS
Antara menyebut keindahan alam Raja Ampat di Papua Barat Daya sulit dibantah. Kawasan ini sering dijuluki surga yang jatuh ke bumi karena pesonanya, baik di darat maupun di bawah laut.

Salah satu tempat yang disebut adalah Desa Wisata Sauwandarek. Di sana wisatawan dapat melihat burung cendrawasih di habitat aslinya dan menikmati tarian tradisional khas Papua yang ditampilkan warga.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/4883629/15-destinasi-wisata-indah-di-raja-ampat';
require __DIR__ . '/../includes/berita-template.php';
