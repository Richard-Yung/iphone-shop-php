<?php
/**
 * Partiel : carte produit (grille accueil).
 * Attend $p (ligne produit).
 */
?>
<article class="card" data-series="<?= e($p['series']) ?>" data-pro="<?= strpos($p['model'], 'Pro') !== false ? '1' : '0' ?>">
  <div class="card__img">
    <?php if ((int) $p['stock'] > 0): ?>
      <span class="card__badge">Disponible</span>
    <?php endif; ?>
    <?php if (!empty($p['image'])): ?>
      <img src="/<?= e($p['image']) ?>" alt="iPhone <?= e($p['model']) ?> — <?= e($p['storage']) ?>" loading="lazy" width="360" height="378">
    <?php else: ?>
      <img src="/assets/img/products/16.png" alt="iPhone <?= e($p['model']) ?>" loading="lazy" width="360" height="378">
    <?php endif; ?>
  </div>
  <div class="card__body">
    <h3 class="card__name"><?= e($p['model']) ?></h3>
    <p class="card__desc"><?= e($p['description'] ?? '') ?></p>
    <a class="card__btn" href="/produit/<?= e($p['slug']) ?>">
      Voir le produit
      <svg class="ic arr" aria-hidden="true"><use href="#i-arrow"/></svg>
    </a>
  </div>
</article>
