<?php
$base = ''; $judul_halaman = 'Profil'; $menu_aktif = 'profil';
require_once __DIR__ . '/includes/foto.php';
require __DIR__ . '/includes/header.php';
?>
<div class="container page-head">
  <h1>Profil keluarga</h1>
  <p class="muted">mama, kakak, adik</p>
</div>
<div class="container profil-grid">
  <?php foreach ($keluarga as $k): ?>
    <a class="profil-kartu" href="<?= e($k['file']) ?>">
      <div class="foto">
        <?php $f = cari_foto($k['foto']); if ($f): ?>
          <img src="<?= e($f) ?>" alt="Foto <?= e($k['nama']) ?>">
        <?php else: ?>
          <div class="ph">Foto <?= e($k['nama']) ?></div>
        <?php endif; ?>
      </div>
      <div class="teks">
        <h3><?= e($k['nama']) ?></h3>
        <span class="muted"><?= e($k['peran']) ?></span>
      </div>
    </a>
  <?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
