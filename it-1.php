<?php
// Berita nomor 1 kategori it. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'it-1';
$kategori_slug = 'it';
$judul = 'OJK Rilis Pedoman Keamanan dan Ketahanan Siber untuk Industri Pendanaan Bersama Berbasis TI';
$tanggal = '11 November 2026';
$isi = <<<TEKS
Otoritas Jasa Keuangan (OJK) merilis Pedoman Keamanan dan Ketahanan Siber untuk penyelenggara layanan pendanaan bersama berbasis teknologi informasi (LPBBTI). Peluncuran ini dibarengi penandatanganan pakta integritas tentang etika penagihan dan pelindungan konsumen.

Kepala Eksekutif Pengawas Lembaga Pembiayaan OJK, Agusman, menyatakan industri perlu bergeser dari sekadar menjaga keamanan siber menuju ketahanan siber. Alasannya, tidak ada sistem yang benar-benar kebal serangan, sehingga penyelenggara harus mampu mengantisipasi, mendeteksi, merespons, dan memulihkan layanan dengan cepat saat terjadi insiden.

Pedoman tersebut memuat lima aspek: tata kelola, identifikasi, pelindungan, deteksi dan pemantauan, serta penanganan dan pemulihan insiden siber. Ada pula instrumen penilaian mandiri, dan penerapannya disesuaikan dengan skala serta risiko masing-masing penyelenggara.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.antaranews.com/berita/5847135/ojk-rilis-pedoman-penguatan-keamanan-siber-dan-teknologi-informasi';
require __DIR__ . '/../includes/berita-template.php';
