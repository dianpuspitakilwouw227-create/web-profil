</main>
<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> <?= e($situs['nama']) ?> (NIM <?= e($situs['nim']) ?>)</p>
  </div>
</footer>
<script src="<?= $base ?>assets/js/main.js"></script>
<?php if (!empty($pakai_galeri_js)): ?>
<script src="<?= $base ?>assets/js/galeri.js"></script>
<?php endif; ?>
</body>
</html>
