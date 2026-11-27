<?php
$base = ''; $judul_halaman = 'Beranda'; $menu_aktif = 'beranda';
require_once __DIR__ . '/includes/foto.php';
require __DIR__ . '/includes/header.php';
?>
<div class="container hero">
  <div>
    <h1><?= e($situs['nama']) ?></h1>
    <p class="lead"><?= e($situs['tagline']) ?></p>
    <p>
      <a class="btn" href="profil.php">Lihat profil keluarga</a>
      <a class="btn alt" href="galeri.php">Buka galeri</a>
    </p>
  </div>
  <div class="hero-foto">
    <?php $f_dian = cari_foto('assets/img/profil/dian.jpeg'); if ($f_dian): ?>
      <img src="<?= e($f_dian) ?>" alt="Foto <?= e($situs['nama']) ?>">
    <?php else: ?>
      <div class="ph">Foto utama<br><small>assets/img/profil/dian.jpeg</small></div>
    <?php endif; ?>
  </div>
</div>

<div class="container">
  <ul class="jelajah">
    <li><a href="profil.php"><strong>Profil</strong><span>Data diri saya, adik, dan Mama</span></a></li>
    <li><a href="audio-video.php"><strong>Audio Video</strong><span>Video perkenalan diri dan lagu favorit</span></a></li>
    <li><a href="galeri.php"><strong>Galeri</strong><span>16 foto bersama keluarga</span></a></li>
    <li><a href="berita.php"><strong>Berita</strong><span>IT, AI, politik, pemrograman, dan keindahan Indonesia timur</span></a></li>
    <li><a href="about.php"><strong>About</strong><span>Tentang website ini</span></a></li>
  </ul>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
