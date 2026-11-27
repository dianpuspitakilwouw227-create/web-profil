<?php
// Berita nomor 5 kategori lifestyle. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'lifestyle-5';
$kategori_slug = 'lifestyle';
$judul = 'DPR Dorong Penguatan Kantor Imigrasi demi Wisata Raja Ampat';
$tanggal = '8 Juni 2026';
$isi = <<<TEKS
Anggota Komisi XIII DPR RI, Yan Permenas Mandenas, mengunjungi Kantor Imigrasi Kelas II TPI Sorong pada Senin, 8 Juni 2026.

Ia menilai layanan imigrasi yang memadai akan mempercepat pemeriksaan dokumen wisatawan mancanegara dan meningkatkan jumlah kunjungan ke Raja Ampat serta daerah lain di Papua Barat Daya.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5598828/dpr-ri-perkuat-kapasitas-kantor-imigrasi-dukung-wisata-raja-ampat';
require __DIR__ . '/../includes/berita-template.php';
