WEBSITE PROFIL PHP - Dian Puspita Kilwouw

CARA MENJALANKAN
1. Pasang XAMPP (atau Laragon), lalu jalankan Apache.
2. Salin folder "website-profil" ke folder htdocs (XAMPP) atau www (Laragon).
3. Buka http://localhost/website-profil/ di browser.
   (Alternatif tanpa XAMPP: buka terminal di folder ini, jalankan "php -S localhost:8000", lalu buka http://localhost:8000)

DATA YANG PERLU KAMU ISI
- includes/config.php : data profil (makanan kesukaan, hobi, warna favorit, status Mama,
  sekolah adik), daftar lagu, dan pilihan galeri 'portrait' atau 'landscape'.
- Cari tulisan "(isi sendiri)" untuk menemukan data yang masih kosong.

FOTO, VIDEO, DAN LAGU (taruh di folder ini)
- Foto profil : assets/img/profil/ -> dian.jpeg, adik.jpeg, mama.jpeg
- Galeri      : assets/img/galeri/ -> foto1.jpeg sampai foto16.jpeg
                (16 foto, semua portrait ATAU semua landscape, bukan selfie)
- Video       : assets/video/perkenalan.mp4 (3 menit, landscape)
- Lagu        : assets/audio/lagu-1.mp3 sampai lagu-5.mp3
- Foto berita (opsional): assets/img/berita/it-1.jpeg, ai-2.jpeg, dst.
Ekstensi bebas (.jpg, .jpeg, .png, .webp). Nama galeri boleh foto1, foto01, atau foto-01.

BERITA (25 file di folder berita/)
Kategori: it, ai, politik, pemrograman, lifestyle (masing-masing 1 sampai 5).
Ke-25 berita sudah terisi ringkasan dan link sumbernya. Kalau mau isi lengkap, buka misalnya
berita/it-1.php lalu ganti $isi dengan teks berita (tetap cantumkan $sumber).
Daftar di halaman Berita ikut berubah otomatis.

STRUKTUR
- Halaman: index, profil (+ profil-dian, profil-adik, profil-mama), audio-video, galeri, berita, about
- includes/ : header.php, footer.php, config.php, profil-template.php, berita-template.php
- assets/   : css, js, img, video, audio
