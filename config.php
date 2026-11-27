<?php
// ===== PENGATURAN UTAMA: ubah data di file ini =====
$situs = [
    'nama'    => 'Dian Puspita Kilwouw',
    'nim'     => '16325033',
    'tagline' => 'Profil keluarga Kilwouw dari Miran, Seram Bagian Timur',
];

// Galeri: 'portrait' (tegak) atau 'landscape' (mendatar). Semua foto harus sama.
$galeri_jumlah    = 16;
$galeri_orientasi = 'portrait';

// Kategori berita (5 kategori x 5 berita = 25 file di folder berita/)
$kategori_berita = [
    'it'          => 'IT',
    'ai'          => 'AI',
    'politik'     => 'Politik di Indonesia',
    'pemrograman' => 'Pemrograman',
    'lifestyle'   => 'Lifestyle: Keindahan Indonesia Timur',
];
$jumlah_berita = 5;

// Profil keluarga: 10 data diri per orang. Ganti "(isi sendiri)" dengan data sebenarnya.
$keluarga = [
    'dian' => [
        'nama' => 'Dian', 'peran' => 'Pemilik website',
        'file' => 'profil-dian.php', 'foto' => 'assets/img/profil/dian.jpeg',
        'data' => [
            'Nama Lengkap'          => 'Dian Puspita Kilwouw',
            'Nim'                   => '16325033',
            'Tempat, Tanggal Lahir' => 'Miran, 27 April 2007',
            'Jenis Kelamin'         => 'Perempuan',
            'agama'                 => 'islam',
            'Pendidikan/Pekerjaan'  => 'Mahasiswa',
            'Alamat/Asal Daerah'    => 'Desa Miran, Kec. Gorom Timur, Kab. Seram Bagian Timur, Maluku',
            'Makanan Kesukaan'      => '(Dimsum, mie ayam, bakso, soto, nasi goreng, dll)',
            'Hobi'                  => '(jalan-jalan, makan, Tidur, volly)',
            'Warna Favorit'         => '(merah, biru, ungu, hitam, putih)',
        ],
    ],
    'adik' => [
        'nama' => 'Adik', 'peran' => 'Adik',
        'file' => 'profil-adik.php', 'foto' => 'assets/img/profil/adik.jpeg',
        'data' => [
            'Nama Lengkap'          => 'Said Idrus Kilwouw',
            'Tempat, Tanggal Lahir' => 'Miran, 11 November 2011',
            'Jenis Kelamin'         => 'Laki-laki',
            'Agama'                 => 'Islam',
            'Anak ke'               => '2 dari 2 bersaudara',
            'Pendidikan/Pekerjaan'  => '(tidak sekolah / SD)',
            'Alamat/Asal Daerah'    => 'Desa Miran, Kec. Gorom Timur, Kab. Seram Bagian Timur, Maluku',
            'Makanan Kesukaan'      => '(Nasi Goreng,)',
            'Hobi'                  => '(Sepak Bola,)',
            'Warna Favorit'         => '(Hitam,Merah)',
        ],
    ],
    'mama' => [
        'nama' => 'Mama', 'peran' => 'Orang tua',
        'file' => 'profil-mama.php', 'foto' => 'assets/img/profil/mama.jpeg',
        'data' => [
            'Nama Lengkap'          => 'Siti Nur Kilwouw',
            'Tempat, Tanggal Lahir' => 'Miran, 5 Januari 1986',
            'Jenis Kelamin'         => 'Perempuan',
            'Agama'                 => 'Islam',
            'Status Perkawinan'     => '(Cerai)',
            'Pendidikan/Pekerjaan'  => 'Mengurus rumah tangga',
            'Alamat/Asal Daerah'    => 'Desa Miran, Kec. Gorom Timur, Kab. Seram Bagian Timur, Maluku',
            'Makanan Kesukaan'      => '(Ikan Kua Kuning, ayam Goreng, sayur, dll)',
            'Hobi'                  => '(Main volly, jalan-jalan,)',
            'Warna Favorit'         => '(Putih, Merah, Biru, Hitam)',
        ],
    ],
];

// Daftar lagu favorit (taruh file mp3 di assets/audio/)
$lagu = [
    ['judul' => 'Stuck With You', 'artis' => '(Ariana Grande, Justin Bieber)', 'file' => 'assets/audio/stuck with you.mp4'],
    ['judul' => 'Great Expectations', 'artis' => '(SIENNA SPIRO)', 'file' => 'assets/audio/great expectations.mp4'],
    ['judul' => 'Love nwantiti', 'artis' => '(CKay)', 'file' => 'assets/audio/love nwantiti.mp4'],
    ['judul' => 'Hayati', 'artis' => '(Harris J)', 'file' => 'assets/audio/hayati.mp4'],
    ['judul' => 'Dont Let Go', 'artis' => '(Zavyre)', 'file' => 'assets/audio/dont let go.mp4'],
];

// ===== Fungsi bantu =====
function e($teks) { return htmlspecialchars((string)$teks, ENT_QUOTES, 'UTF-8'); }
function ada_file($path) { return is_file(__DIR__ . '/../' . $path); }
