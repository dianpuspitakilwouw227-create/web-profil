<?php
// Mencari foto dengan ekstensi apa saja (jpg, jpeg, png, webp).
// Mengembalikan path foto yang ditemukan, atau null kalau tidak ada.
function cari_foto($path) {
    $dasar = preg_replace('/\.[A-Za-z0-9]+$/', '', $path);
    foreach (array('jpg', 'jpeg', 'png', 'webp', 'JPG', 'JPEG', 'PNG') as $ext) {
        if (is_file(__DIR__ . '/../' . $dasar . '.' . $ext)) {
            return $dasar . '.' . $ext;
        }
    }
    return null;
}

// Foto galeri nomor $n: menerima foto-01, foto01, foto-1, atau foto1
function cari_foto_galeri($n) {
    $dua = str_pad($n, 2, '0', STR_PAD_LEFT);
    foreach (array("foto-$dua", "foto$dua", "foto-$n", "foto$n") as $nama) {
        $p = cari_foto("assets/img/galeri/$nama");
        if ($p) { return $p; }
    }
    return null;
}
