<?php
// Dipanggil oleh setiap file di folder berita/.
// Saat daftar berita dibuat (berita.php), file ini hanya berhenti agar tidak menampilkan halaman.
if (defined('LIST_ONLY')) { return; }
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/foto.php';
$base          = isset($base) ? $base : '../';
$judul_halaman = $judul;
$menu_aktif    = 'berita';
$nama_kategori = isset($kategori_berita[$kategori_slug]) ? $kategori_berita[$kategori_slug] : '';
$gambar_path   = cari_foto('assets/img/berita/' . $kode . '.jpg');
require __DIR__ . '/header.php';
?>
<article class="container narrow artikel">
  <p class="crumb"><a href="<?= $base ?>berita.php">Berita</a> / <?= e($nama_kategori) ?></p>
  <h1><?= e($judul) ?></h1>
  <p class="meta"><?= e($tanggal) ?></p>
  <?php if ($gambar_path): ?>
    <img class="foto-berita" src="<?= $base . e($gambar_path) ?>" alt="<?= e($judul) ?>">
  <?php endif; ?>
  <?php foreach (preg_split('/\n\s*\n/', trim($isi)) as $paragraf): ?>
    <p><?= e($paragraf) ?></p>
  <?php endforeach; ?>
  <p class="sumber">Sumber: <a href="<?= e($sumber) ?>" target="_blank" rel="noopener"><?= e($sumber) ?></a></p>
  <p><a href="<?= $base ?>berita.php">Kembali ke daftar berita</a></p>
</article>
<?php require __DIR__ . '/footer.php'; ?>
