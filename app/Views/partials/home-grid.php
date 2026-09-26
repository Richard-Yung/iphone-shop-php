<?php
/**
 * Partiel : grille de produits de l'accueil (sélectionnable par chips).
 * Attend $grid (liste de produits).
 */
?>
<?php if (empty($grid)): ?>
  <p style="grid-column:1/-1; color:var(--muted); font-size:12px; padding:12px 4px;">
    Aucun modèle dans cette sélection pour le moment — <a href="/catalogue" style="color:var(--navy); font-weight:600;">voir tout le catalogue</a>.
  </p>
<?php else: ?>
  <?php foreach ($grid as $p): ?>
    <?php require APP_VIEW . '/partials/product-card.php'; ?>
  <?php endforeach; ?>
<?php endif; ?>
