<?php
// Berita nomor 2 kategori ai. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'ai-2';
$kategori_slug = 'ai';
$judul = 'Indonesia Siapkan Regulasi dan Peta Jalan AI';
$tanggal = '20 Oktober 2026';
$isi = <<<TEKS
Menteri Komunikasi dan Digital Meutya Hafid mengatakan pemerintah sedang menyiapkan dua rancangan Peraturan Presiden, yaitu tentang etika kecerdasan buatan dan peta jalan AI nasional. Keduanya akan menjadi landasan pengembangan dan pemanfaatan AI di Indonesia.

Dalam acara Bali Tech Week 2026 pada 19 Oktober 2026, Meutya menyebut tingginya adopsi AI di Indonesia sebagai peluang besar untuk meningkatkan produktivitas dan daya saing nasional. Ia juga menegaskan aturannya tidak dibuat terlalu ketat sampai menghambat inovasi.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://teknologi.bisnis.com/read/20261020/84/2013949/indonesia-siapkan-regulasi-dan-peta-jalan-ai';
require __DIR__ . '/../includes/berita-template.php';
