<?php
// Berita nomor 3 kategori it. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'it-3';
$kategori_slug = 'it';
$judul = 'OJK Soroti Ketergantungan Infrastruktur Teknologi Informasi Bank Digital';
$tanggal = 'Tanggal terbit: lihat di sumber';
$isi = <<<TEKS
Kontan memberitakan bahwa OJK menyoroti ketergantungan bank digital pada infrastruktur teknologi informasi. Isu ini penting karena layanan bank digital sepenuhnya berjalan lewat sistem teknologi.

Penjelasan lengkap dari OJK dapat dibaca di artikel aslinya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://keuangan.kontan.co.id/news/ojk-soroti-ketergantungan-infrastruktur-teknologi-informasi-bank-digital';
require __DIR__ . '/../includes/berita-template.php';
