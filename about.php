<?php
$base = ''; $judul_halaman = 'About'; $menu_aktif = 'about';
require __DIR__ . '/includes/header.php';

// Foto profil utama (dian.jpeg / jpg / png / webp)
$foto = null;
foreach (array('jpeg', 'jpg', 'png', 'webp') as $x) {
    if (is_file(__DIR__ . '/assets/img/profil/dian.' . $x)) { $foto = 'assets/img/profil/dian.' . $x; break; }
}
$inisial = strtoupper(substr($situs['nama'], 0, 1));

// Data di tabel
$info = array(
    'Nama'          => $situs['nama'],
    'NIM'           => $situs['nim'],
    'Program Studi' => 'D3 Manajemen Informatika',
    'Kampus'        => 'Politeknik Negeri Fakfak',
    'Mata Kuliah'   => 'Pemrograman Berbasis Web',
    'Dosen'         => 'Ardyansyah Mualo',
);

// Kelompok: isi nama kelompok, nama teman, dan link beranda mereka
$nama_kelompok = '[Isi nama kelompok]';
$anggota = array(
    array('nama' => 'Dian Puspita Kilwouw', 'link' => 'index.php'),
);
?>
<style>
.about{display:grid;grid-template-columns:200px 1fr;gap:1.2rem;padding:2.5rem 0 1.5rem;align-items:start}
.about-kartu{background:var(--surface);border:1px solid var(--line);border-radius:var(--r);padding:1.2rem;text-align:center}
.about-foto{width:96px;height:96px;border-radius:50%;border:3px solid var(--accent);margin:0 auto .8rem;overflow:hidden;display:grid;place-items:center;background:var(--surface2);font-size:1.6rem;font-weight:700;color:var(--accent)}
.about-foto img{width:100%;height:100%;object-fit:cover}
.about-kartu h2{font-size:1.05rem;margin:0 0 .2rem}
.about-kartu p{margin:0;color:var(--muted);font-size:.9rem}
.about-tabel{margin:0;background:var(--surface);border:1px solid var(--line);border-radius:var(--r);overflow:hidden}
.about-tabel div{display:grid;grid-template-columns:130px 1fr;gap:1rem;padding:.6rem 1rem;border-bottom:1px solid var(--line);font-size:.95rem}
.about-tabel div:last-child{border-bottom:0}
.about-tabel dt{color:var(--muted)}
.about-tabel dd{margin:0}
.kelompok{border-top:1px solid var(--line);padding:1.5rem 0 1rem}
.kelompok h2{font-size:1.1rem;margin-bottom:.8rem}
.kelompok ul{list-style:none;margin:0;padding:0;display:flex;flex-wrap:wrap;gap:.5rem}
.kelompok a{display:inline-block;padding:.4rem .9rem;border:1px solid var(--line);border-radius:999px;text-decoration:none;font-size:.92rem}
.kelompok a:hover{border-color:var(--accent);background:var(--surface)}
@media(max-width:700px){.about{grid-template-columns:1fr}.about-tabel div{grid-template-columns:1fr;gap:0}}
</style>

<div class="container about">
  <div class="about-kartu">
    <div class="about-foto">
      <?php if ($foto): ?>
        <img src="<?= e($foto) ?>" alt="Foto <?= e($situs['nama']) ?>">
      <?php else: ?>
        <?= e($inisial) ?>
      <?php endif; ?>
    </div>
    <h2><?= e($situs['nama']) ?></h2>
    <p>NIM <?= e($situs['nim']) ?></p>
  </div>
  <dl class="about-tabel">
    <?php foreach ($info as $label => $isi): ?>
      <div><dt><?= e($label) ?></dt><dd><?= e($isi) ?></dd></div>
    <?php endforeach; ?>
  </dl>
</div>
<div class="container" style="padding:1rem 0">
  <h2>Perkenalan Diri</h2>
  <?php if (ada_file('assets/video/perkenalan.mp4')): ?>
    <video controls preload="metadata" style="width:100%;max-width:480px;border-radius:12px">
      <source src="assets/video/perkenalan.mp4" type="video/mp4">
    </video>
  <?php endif; ?>
  <p>Hallo nama saya Dian puspita Kilwouw, saya berasal dari Fakfak dan saat ini sedang menempuh pendidikan di Politeknik Negeri Fakfak.
  </p>
</div>

<div class="container kelompok">
  <h2>Kelompok <?= e($nama_kelompok) ?></h2>
  <ul>
    <?php foreach ($anggota as $a): ?>
      <li><a href="<?= e($a['link']) ?>" target="_blank" rel="noopener"><?= e($a['nama']) ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>