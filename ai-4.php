<?php
// Berita nomor 4 kategori ai. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'ai-4';
$kategori_slug = 'ai';
$judul = 'Menaker: Adopsi AI di Dunia Kerja Harus Berorientasi pada Manusia';
$tanggal = '15 September 2026';
$isi = <<<TEKS
Menteri Ketenagakerjaan Yassierli mengatakan penerapan kecerdasan buatan di dunia kerja harus berorientasi pada manusia.

Menurutnya, adopsi AI perlu diarahkan untuk meningkatkan produktivitas tenaga kerja nasional.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5741868/menaker-adopsi-ai-di-dunia-kerja-harus-berorientasi-pada-manusia';
require __DIR__ . '/../includes/berita-template.php';
