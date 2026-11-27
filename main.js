(function () {
  var tombol = document.querySelector('.nav-toggle');
  var menu = document.getElementById('menu-utama');
  if (!tombol || !menu) return;
  tombol.addEventListener('click', function () {
    var buka = menu.classList.toggle('open');
    tombol.setAttribute('aria-expanded', buka ? 'true' : 'false');
  });
})();
