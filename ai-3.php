<?php
// Berita nomor 3 kategori ai. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'ai-3';
$kategori_slug = 'ai';
$judul = 'Adopsi AI di Indonesia Mulai Masif, Ini Tantangannya';
$tanggal = '20 November 2026';
$isi = <<<TEKS
Okezone mengutip laporan Strand Partners berjudul Unlocking Indonesia's AI Potential 2026 (terbit Agustus 2026). Laporan itu menyebut adopsi AI di Indonesia tumbuh 40 persen dalam 12 bulan terakhir, lebih tinggi dibanding pertumbuhan tahun sebelumnya sebesar 28 persen.

Meski begitu, Country Manager Xtremax Akbar Khrisna mengatakan para pelaku bisnis masih menghadapi pilihan teknologi yang terbatas.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://economy.okezone.com/read/2026/11/20/320/3255132/adopsi-ai-di-indonesia-mulai-masif-ini-tantangannya';
require __DIR__ . '/../includes/berita-template.php';
