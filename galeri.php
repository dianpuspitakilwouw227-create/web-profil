<?php
$base = ''; $judul_halaman = 'Galeri'; $menu_aktif = 'galeri';
$pakai_galeri_js = true;
require_once __DIR__ . '/includes/foto.php';
require __DIR__ . '/includes/header.php';
$kelas = $galeri_orientasi === 'landscape' ? ' galeri-landscape' : '';
?>
<div class="container page-head">
  <h1>Galeri</h1>
  <p class="muted">Klik foto untuk memperbesar, lalu geser ke kiri atau kanan.</p>
</div>
<div class="container galeri-grid<?= $kelas ?>">
  <?php for ($n = 1; $n <= $galeri_jumlah; $n++):
    $nomor = str_pad($n, 2, '0', STR_PAD_LEFT);
    $path  = cari_foto_galeri($n);
    if ($path): ?>
      <button type="button" class="galeri-item" data-src="<?= $path ?>" data-alt="Foto <?= $nomor ?>">
        <img src="<?= $path ?>" alt="Foto <?= $nomor ?>" loading="lazy">
      </button>
    <?php else: ?>
      <div class="galeri-item"><div class="ph">Foto <?= $nomor ?><br><small>foto-<?= $nomor ?>.jpg</small></div></div>
    <?php endif;
  endfor; ?>
</div>

<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Foto diperbesar">
  <button type="button" class="lb-btn lb-close" aria-label="Tutup">&times;</button>
  <button type="button" class="lb-btn lb-prev" aria-label="Foto sebelumnya">&lsaquo;</button>
  <img src="" alt="">
  <button type="button" class="lb-btn lb-next" aria-label="Foto berikutnya">&rsaquo;</button>
  <div class="lb-count"></div>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
