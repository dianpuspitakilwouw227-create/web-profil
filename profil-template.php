<?php
// Dipanggil oleh profil-dian.php, profil-adik.php, profil-mama.php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/foto.php';
$base          = isset($base) ? $base : '';
$p             = $keluarga[$kunci];
$judul_halaman = 'Profil ' . $p['nama'];
$menu_aktif    = 'profil';
require __DIR__ . '/header.php';
?>
<div class="container profil-detail">
  <div class="profil-foto">
    <?php $f = cari_foto($p['foto']); if ($f): ?>
      <img src="<?= $base . e($f) ?>" alt="Foto <?= e($p['data']['Nama Lengkap']) ?>">
    <?php else: ?>
      <div class="ph">Foto <?= e($p['nama']) ?><br><small><?= e($p['foto']) ?></small></div>
    <?php endif; ?>
  </div>
  <div>
    <p class="crumb"><a href="<?= $base ?>profil.php">Profil</a> / <?= e($p['nama']) ?></p>
    <h1><?= e($p['data']['Nama Lengkap']) ?></h1>
    <p class="muted"><?= e($p['peran']) ?></p>
    <dl class="data">
      <?php foreach ($p['data'] as $label => $isi): ?>
        <div class="baris"><dt><?= e($label) ?></dt><dd><?= e($isi) ?></dd></div>
      <?php endforeach; ?>
    </dl>
    <p class="lain">Profil lain:
      <?php foreach ($keluarga as $k => $v): if ($k === $kunci) continue; ?>
        <a href="<?= $base . e($v['file']) ?>"><?= e($v['nama']) ?></a>
      <?php endforeach; ?>
    </p>
  </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>
