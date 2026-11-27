<?php
// Berita nomor 5 kategori pemrograman. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'pemrograman-5';
$kategori_slug = 'pemrograman';
$judul = 'Gemini vs ChatGPT untuk Pemrograman: Mana yang Lebih Baik?';
$tanggal = 'Tanggal terbit: lihat di sumber';
$isi = <<<TEKS
ClickUp membandingkan Gemini dan ChatGPT untuk membantu pekerjaan pemrograman. Gemini disebut mampu memberi jawaban yang akurat dalam lebih dari 20 bahasa pemrograman, termasuk Python, JavaScript, dan C++.

Perbandingan kemampuan percakapan dan aspek lainnya dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://clickup.com/id/blog/256696/gemini-vs-chatgpt-untuk-pemrograman';
require __DIR__ . '/../includes/berita-template.php';
