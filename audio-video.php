<?php
$base = ''; $judul_halaman = 'Audio Video'; $menu_aktif = 'audio-video';
require __DIR__ . '/includes/header.php';

// Video perkenalan (taruh file di assets/video/vidio.mp4)
$video = 'assets/video/vidio1.mp4';

// Video YouTube: tempel link lengkapnya di sini
$youtube_link = 'https://youtu.be/wwzKcR0bGyM?si=TCPp52mifvDu6mal';

$youtube_id = '';
if (preg_match('~(?:youtu\.be/|v=|embed/|shorts/)([A-Za-z0-9_-]{11})~', $youtube_link, $m)) {
    $youtube_id = $m[1];
}
?>
<style>
.av-dua{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.av-dua h2{font-size:1.15rem}
.video-wrap iframe{width:100%;height:100%;border:0}
.video-wrap video{width:100%;height:100%;object-fit:contain}
@media(max-width:700px){.av-dua{grid-template-columns:1fr}}
</style>

<div class="container page-head">
  <h1>Audio Video</h1>
</div>

<div class="container av-dua">
  <div>
    <h2>Video perkenalan diri</h2>
    <div class="video-wrap">
      <?php if (ada_file($video)): ?>
        <video controls preload="metadata" disablePictureInPicture><source src="<?= $video ?>" type="video/mp4">Browser tidak mendukung video.</video>
      <?php else: ?>
        <span>Taruh video di <?= $video ?></span>
      <?php endif; ?>
    </div>
  </div>
  <div>
    <h2>Video dari YouTube</h2>
    <div class="video-wrap">
      <?php if ($youtube_id): ?>
        <iframe src="https://www.youtube.com/embed/<?= e($youtube_id) ?>" title="Video YouTube" allow="accelerometer; clipboard-write; encrypted-media; gyroscope" allowfullscreen></iframe>
      <?php else: ?>
        <span>Isi link YouTube di audio-video.php</span>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container narrow">
  <h2 style="margin-top:3rem">Lagu favorit</h2>
  <ul class="lagu">
    <?php foreach ($lagu as $l): ?>
      <li>
        <div><strong><?= e($l['judul']) ?></strong><br><span class="muted"><?= e($l['artis']) ?></span></div>
        <?php if (ada_file($l['file'])): ?>
          <audio controls preload="none" src="<?= e($l['file']) ?>"></audio>
        <?php else: ?>
          <span class="muted">Taruh file di <?= e($l['file']) ?></span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>