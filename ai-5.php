<?php
// Berita nomor 5 kategori ai. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'ai-5';
$kategori_slug = 'ai';
$judul = 'Kolaborasi Infrastruktur AI Dorong Adopsi Teknologi di Indonesia';
$tanggal = '6 Oktober 2026';
$isi = <<<TEKS
Okezone memberitakan sebuah kolaborasi yang memadukan infrastruktur komputasi kecerdasan buatan, teknologi open networking, dan tenaga ahli. Tujuannya mempercepat adopsi AI di sektor perusahaan (enterprise) di Indonesia.

Acara pengumuman kolaborasi ini berlangsung di Jakarta Selatan pada Selasa, 6 Oktober 2026.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://digital.okezone.com/view/2026/10/06/1/106245/kolaborasi-infrastruktur-ai-dorong-adopsi-teknologi-di-indonesia';
require __DIR__ . '/../includes/berita-template.php';
