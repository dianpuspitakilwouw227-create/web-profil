(function () {
  var items = Array.prototype.slice.call(document.querySelectorAll('.galeri-item[data-src]'));
  var lb = document.getElementById('lightbox');
  if (!lb || !items.length) return;
  var img = lb.querySelector('img');
  var hitung = lb.querySelector('.lb-count');
  var i = 0, x0 = null;

  function tampil(n) {
    i = (n + items.length) % items.length;
    img.src = items[i].getAttribute('data-src');
    img.alt = items[i].getAttribute('data-alt') || '';
    hitung.textContent = (i + 1) + ' / ' + items.length;
  }
  function buka(n) {
    tampil(n);
    lb.classList.add('open');
    document.body.style.overflow = 'hidden';
    lb.querySelector('.lb-close').focus();
  }
  function tutup() {
    lb.classList.remove('open');
    document.body.style.overflow = '';
    items[i].focus();
  }

  items.forEach(function (b, n) { b.addEventListener('click', function () { buka(n); }); });
  lb.querySelector('.lb-prev').addEventListener('click', function () { tampil(i - 1); });
  lb.querySelector('.lb-next').addEventListener('click', function () { tampil(i + 1); });
  lb.querySelector('.lb-close').addEventListener('click', tutup);
  lb.addEventListener('click', function (e) { if (e.target === lb) tutup(); });

  document.addEventListener('keydown', function (e) {
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape') tutup();
    if (e.key === 'ArrowLeft') tampil(i - 1);
    if (e.key === 'ArrowRight') tampil(i + 1);
  });

  lb.addEventListener('touchstart', function (e) { x0 = e.changedTouches[0].clientX; }, { passive: true });
  lb.addEventListener('touchend', function (e) {
    if (x0 === null) return;
    var dx = e.changedTouches[0].clientX - x0;
    if (Math.abs(dx) > 50) tampil(dx < 0 ? i + 1 : i - 1);
    x0 = null;
  });
})();
