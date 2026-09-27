<?php
/**
 * Partiel : carte produit (grille accueil).
 * Structure conforme maquette : photo à gauche (détourée, fond blanc),
 * colonne droite = badge Disponible / titre / description / bouton navy.
 * Attend $p (ligne produit).
 */
?>
<article class="card" data-series="<?= e($p['series']) ?>" data-pro="<?= strpos($p['model'], 'Pro') !== false ? '1' : '0' ?>">
  <div class="card__img">
    <?php if (!empty($p['image'])): ?>
      <img src="/<?= e($p['image']) ?>" alt="iPhone <?= e($p['model']) ?> — <?= e($p['storage']) ?>" loading="lazy" width="164" height="188">
    <?php else: ?>
      <img src="/assets/img/products/16.png" alt="iPhone <?= e($p['model']) ?>" loading="lazy" width="164" height="188">
    <?php endif; ?>
  </div>
  <div class="card__body">
    <?php if ((int) $p['stock'] > 0): ?>
      <span class="card__badge">Disponible</span>
    <?php endif; ?>
    <h3 class="card__name"><?= e($p['model']) ?></h3>
    <p class="card__desc"><?= e($p['description'] ?? '') ?></p>
    <a class="card__btn" href="/produit/<?= e($p['slug']) ?>">
      Voir le produit
      <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
    </a>
  </div>
</article>
