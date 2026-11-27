<?php
$base = ''; $judul_halaman = 'Berita'; $menu_aktif = 'berita';
define('LIST_ONLY', true);
require __DIR__ . '/includes/header.php';

// Membaca judul, tanggal, dan ringkasan dari tiap file berita
function muat_berita($path) {
    include $path;
    $teks = trim(preg_replace('/\s+/', ' ', $isi));
    return ['judul' => $judul, 'tanggal' => $tanggal, 'ringkas' => (function_exists('mb_substr') ? mb_substr($teks, 0, 140) : substr($teks, 0, 140)) . '...'];
}
?>
<div class="container narrow page-head">
  <h1>Berita</h1>
</div>
<div class="container narrow">
  <?php foreach ($kategori_berita as $slug => $nama): ?>
    <section class="kategori">
      <h2><?= e($nama) ?></h2>
      <?php for ($n = 1; $n <= $jumlah_berita; $n++):
        $file = "berita/$slug-$n.php";
        if (!is_file(__DIR__ . '/' . $file)) continue;
        $b = muat_berita(__DIR__ . '/' . $file); ?>
        <a class="berita-baris" href="<?= $file ?>">
          <strong><?= e($b['judul']) ?></strong>
          <span class="tgl"><?= e($b['tanggal']) ?></span>
          <span class="ringkas"><?= e($b['ringkas']) ?></span>
        </a>
      <?php endfor; ?>
    </section>
  <?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
