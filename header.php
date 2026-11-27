<?php
require_once __DIR__ . '/config.php';
$base          = isset($base) ? $base : '';
$judul_halaman = isset($judul_halaman) ? $judul_halaman : 'Beranda';
$menu_aktif    = isset($menu_aktif) ? $menu_aktif : '';
function aktif($a, $b) { return $a === $b ? ' aria-current="page"' : ''; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($judul_halaman) ?> | <?= e($situs['nama']) ?></title>
  <link rel="stylesheet" href="<?= $base ?>assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="<?= $base ?>index.php"><?= e($situs['nama']) ?></a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="menu-utama">Menu</button>
    <nav id="menu-utama" class="menu" aria-label="Menu utama">
      <ul>
        <li><a href="<?= $base ?>index.php"<?= aktif($menu_aktif, 'beranda') ?>>Beranda</a></li>
        <li class="has-sub">
          <a href="<?= $base ?>profil.php"<?= aktif($menu_aktif, 'profil') ?>>Profil</a>
          <ul class="sub">
            <?php foreach ($keluarga as $k): ?>
              <li><a href="<?= $base . e($k['file']) ?>"><?= e($k['nama']) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="<?= $base ?>audio-video.php"<?= aktif($menu_aktif, 'audio-video') ?>>Audio Video</a></li>
        <li><a href="<?= $base ?>galeri.php"<?= aktif($menu_aktif, 'galeri') ?>>Galeri</a></li>
        <li><a href="<?= $base ?>berita.php"<?= aktif($menu_aktif, 'berita') ?>>Berita</a></li>
        <li><a href="<?= $base ?>about.php"<?= aktif($menu_aktif, 'about') ?>>About</a></li>
      </ul>
    </nav>
  </div>
</header>
<main>
