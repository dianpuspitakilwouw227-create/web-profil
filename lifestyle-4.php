<?php
// Berita nomor 4 kategori lifestyle. Ganti isinya dengan teks berita lengkap kalau mau.
$base = '../';
$kode = 'lifestyle-4';
$kategori_slug = 'lifestyle';
$judul = 'Festival Pesona Raja Ampat 2026 Angkat Alam dan Budaya Bahari';
$tanggal = '1-3 Oktober 2026';
$isi = <<<TEKS
Festival Pesona Raja Ampat 2026 digelar pada 1 sampai 3 Oktober 2026 di Kabupaten Raja Ampat, Papua Barat Daya, dengan tiket gratis.

Acara ini menonjolkan keindahan alam, budaya, dan wisata bahari Raja Ampat, sekaligus mengajak wisatawan lokal maupun mancanegara memahami kearifan budaya setempat.

Ini ringkasan singkat. Untuk isi lengkapnya, baca berita aslinya di tautan sumber di bawah.
TEKS;
$sumber = 'https://www.indonesia.travel/id-id/events/event-detail/festival-pesona-raja-ampat-2026/';
require __DIR__ . '/../includes/berita-template.php';
