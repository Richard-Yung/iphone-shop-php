/* iShop / iPhone Togo — interactions légères (vanilla JS) */
(function () {
  'use strict';

  /* ---------- Menu mobile ---------- */
  var burger = document.querySelector('[data-burger]');
  var drawer = document.querySelector('[data-drawer]');
  if (burger && drawer) {
    burger.addEventListener('click', function () {
      var open = drawer.classList.toggle('open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    drawer.addEventListener('click', function (e) {
      if (e.target.closest('a')) drawer.classList.remove('open');
    });
  }

  /* ---------- Filtres chips — swap fluide de la grille via fetch ---------- */
  var chips = document.querySelector('[data-chips]');
  var grid = document.querySelector('[data-grid]');
  if (chips && grid) {
    var loading = false;
    chips.addEventListener('click', function (e) {
      var chip = e.target.closest('.chip');
      if (!chip || loading) return;
      e.preventDefault();

      var href = chip.getAttribute('href');
      if (!href) return;

      // Fallback naturel si fetch indisponible
      if (!window.fetch) { window.location.href = href; return; }

      loading = true;
      chips.querySelectorAll('.chip').forEach(function (c) { c.classList.remove('active'); });
      chip.classList.add('active');

      var url = href + (href.indexOf('?') > -1 ? '&' : '?') + 'partial=1';
      grid.style.opacity = '0.45';

      fetch(url, { headers: { 'X-Requested-With': 'fetch' } })
        .then(function (r) { return r.ok ? r.text() : Promise.reject(r.status); })
        .then(function (html) {
          grid.innerHTML = html;
          grid.style.opacity = '1';
          if (window.history && history.pushState) history.pushState(null, '', href);
          loading = false;
        })
        .catch(function () {
          window.location.href = href; // repli : navigation classique
        });
    });

    grid.style.transition = 'opacity .18s ease';
  }

  /* ---------- Header : ombre au défilement ---------- */
  var header = document.querySelector('[data-header]');
  if (header) {
    var onScroll = function () {
      header.style.boxShadow = window.scrollY > 6 ? '0 4px 14px rgba(18,42,71,.08)' : 'none';
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
})();
