<?php
// Berita nomor 3 kategori politik. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'politik-3';
$kategori_slug = 'politik';
$judul = 'Magang Nasional 2026 Batch 3A Serap 55 Ribu Lulusan Perguruan Tinggi';
$tanggal = 'November 2026';
$isi = <<<TEKS
Antara melaporkan bahwa program Magang Nasional 2026 batch 3A menyerap sekitar 55 ribu lulusan perguruan tinggi.

Dalam laporan foto Antara, tercatat 55.364 peserta MagangHub Kemnaker mulai menjalani pemagangan.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5859255/magang-nasional-2026-batch-3a-serap-55-ribu-lulusan-perguruan-tinggi';
require __DIR__ . '/../includes/berita-template.php';
